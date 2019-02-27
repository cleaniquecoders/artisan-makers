<?php

namespace CleaniqueCoders\ArtisanMakers\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class ArtisanCommandTest extends TestCase
{
    /** @test */
    public function it_has_artisan_makers()
    {
        $commands = [
            'Contract',
            'Exception',
            'Model',
            'Observer',
            'Presenter',
            'Processor',
            'Service',
            'Trait',
            'Transformer',
        ];

        foreach ($commands as $command) {
            $prefix  = 'TestArtisanMaker';
            $name    = ('Model' == $command ? 'Models/' . $prefix . $command : $prefix . $command);
            $dir     = app_path(Str::plural($command));
            $path    = $dir . '/' . $prefix . $command . '.php';
            $message = $command . ' created successfully.';
            $cmd     = 'make:' . Str::lower($command);

            Artisan::call($cmd, ['name' => $name]);
            $output = Artisan::output();
            $this->assertStringContainsString($message, $output);
            $this->assertFileExists($dir);
            $this->assertFileExists($path);

            $this->destroy($dir);

            if ('Observer' == $command) {
                $this->destroy(app_path('Providers'));
            }

            $this->assertFileNotExists($dir);
            $this->assertFileNotExists($path);
        }
    }

    private function destroy($path)
    {
        if (file_exists($path)) {
            exec('rm -fr ' . $path);
        }
    }
}
