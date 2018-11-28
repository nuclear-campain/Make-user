# Make user command

**This package is heavily based on [Laravel make user](https://github.com/michaeldyrynda/laravel-make-user). All credits to him!**

Out of the box, Laravel makes it really simple to scaffold out with its [authentication quickstart](https://laravel.com/docs/5.7/authentication#authentication-quickstart). 
Whilst this makes it really easy to register and authenticate users, for many of the applications we are building,
we usually remove the ability for visitors to register themselves. 

I still need a way to get users into those applications, however, and whilst they're in early development this usually 
involves firing up Laravel Tinker. This can be a tedious process, and one that we repeat many times over. 

This package aims to solve the repetition problem by providing a convenient `make:user` Artisan command. 

## Code samples 

This package exposs a `make:user` command, which is accessed via the Artisan command line utility. This package will use the model 
defined in your `auth.providers.users.model` configuration value. 

```bash
php artisan make:user
```

This package runs on the assumption that you are using Laravel's default `users` table structure. You can specify additional fields when prompted.

## Installation 

This package is installed via [Composer](https://getcomposer.org/). To installl, run the following command. 

```
composer require b61/portal-make-user
```

**NOTE:** Make sure u installed [spatie/laravel-permission](https://github.com/spatie/laravel-permission) before u start using the package. 

## Support 

If you believe you have found an issue, please report it using the GitHub issue tracker, or better yet, fork the repository and submit a pull request.
