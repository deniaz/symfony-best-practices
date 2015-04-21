# Symfony Best Practices 

Some excerpts from the [Official Symfony Best Practices](http://symfony.com/doc/current/best_practices/index.html) with example code.

## Creating the project
> Always use [Composer](https://getcomposer.org/) to install Symfony.

`composer create-project symfony/framework-standard-edition blog/`

## The Application

> Create only one bundle called `AppBundle` for your application logic

## Configuration

> Define the infrastructure-related configuration options in the `app/config/parameters.yml` file.

-
> Define all your application's parameters in the `app/config/parameters.yml.dist` file.

-
> Define the application behavior related configuration options in the `app/config/config.yml` file.

-
> Use constants to define configuration options that rarely change.

## Business Logic

> The name of your application’s services should be as short as possible, but unique enough that you can search your project for the service if you ever need to.

-
> Use the YAML format to define your own services.

-
> Use annotations to define the mapping information of the Doctrine entities.

**Symfony follows [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) and [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)!**

## Controllers

> Make your controller extend the `FrameworkBundle` base Controller and use annotations to configure routing, caching and security whenever possible.

-
> Don't use the `@Template()` annotation to configure the template used by the controller.

-
> Use the ParamConverter trick to automatically query for Doctrine entities when it's simple and convenient.

## Templates

> Use Twig templating format for your templates.

-
> Store all your application's templates in `app/Resources/views/` directory.

-
> Define your Twig extensions in the `AppBundle/Twig/` directory and configure them using the `app/config/services.yml` file.

## Forms

> Define your forms as PHP classes.

-
> Add buttons in the templates, not in the form classes or the controllers.

## i18n

> Use the XLIFF format for your translation files.

-
> Store the translation files in the `app/Resources/translations/` directory.

## Security

> * For protecting broad URL patterns, use access_control;
> * Whenever possible, use the @Security annotation;
> * Check security directly on the security.context service whenever you have a more complex situation.

## Web Assets

> Store your assets in the web/ directory.

## Tests

> Define a functional test that at least checks if your application pages are successfully loading.

-
> Hardcode the URLs used in the functional tests instead of using the URL generator.
