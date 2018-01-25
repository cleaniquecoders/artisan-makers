## About Your Package

This is a extended artisan make command.

## Installation

1. In order to install `cleaniquecoders/artisan-makers` in your Laravel project, just run the *composer require* command from your terminal:

```
composer require cleaniquecoders/artisan-makers
```

2. Then in your `config/app.php` add the following to the providers array:

```php
CleaniqueCoders\ArtisanMakers\ArtisanMakersServiceProvider::class,
```

3. In the same `config/app.php` add the following to the aliases array:

```php
'ArtisanMakers' => CleaniqueCoders\ArtisanMakers\ArtisanMakersFacade::class,
```

## Usage

**Contracts**

```
$ php artisan make:contract ContractName
```

**Exceptions**

```
$ php artisan make:exception NewExceptionClassName
```

**Model**

```
$ php artisan make:mode ModelName` 
```	

This will create models under `app/Models` directory instead of `app` directory by default.

**Register manually** in your application in `app/Console/Kernel.php` in `$commands` property. Not sure why the command didn't load in the package. 

```php
protected $commands = [
    \CleaniqueCoders\ArtisanMakers\Console\Commands\MakeModelCommand::class,
];
```	

**Observer**

```
$ php artisan make:observer ObserverClassName ModelToObserve
```

*TODO*

- [x] Create `ObserverServiceProvider`
- [x] Create `Observer` class
- [ ] Register `ObserverServiceProvider` in `config/app.php`
- [ ] Include model & observer namespace in `ObserverServiceProvider`
- [ ] Bootstrap Observer in `ObserverServiceProvider`

**Presenter**

Presenter is generic class to help generate consistent HTML element.

```
$ php artisan make:presenter PresenterClassName
```

**Processors**

Processor use to generate core processing of the application. This can be a payroll processor, leave approval processor.

```
$ php artisan make:processor ProcessorClassName
```

**Repositories** *TODO*

Apply repository pattern.

```
$ php artisan make:repository RepositoryClassName
```

**Services**

Services is something that a domain provide to external. A total hours of overtime need to be provide to payroll domain in order to calculate total claimable overtime.

```
$ php artisan make:service ServiceClassName
```

**Traits**

```
$ php artisan make:trait TraitClassName
```

**Transformers**

Tranformer use to transform from one to another data structure, depends on the domain concern.

```
$ php artisan make:transformer TransformerClassName
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).