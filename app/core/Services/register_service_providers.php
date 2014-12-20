<?php

/*
|--------------------------------------------------------------------------
|             REGISTER SESSIONS SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/

    $app->register(new Silex\Provider\SessionServiceProvider());

/*
|--------------------------------------------------------------------------
|             REGISTER DOO SILEX CSRF SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
    $app->register(new Doowebdev\Core\Sessions\DooSessionServiceProvider());


/*
|--------------------------------------------------------------------------
|             REGISTER CORE FORM VALIDATION SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
$app->register(new \Doowebdev\Core\Validator\CoreFormValidationServiceProvider());


/*
|--------------------------------------------------------------------------
|             REGISTER TWIG SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
    $app->register(new Silex\Provider\TwigServiceProvider(), [
        'twig.path' => __DIR__.'/../../../src/Doowebdev/Views',
    ]);


/*
|--------------------------------------------------------------------------
|             LANGUAGE TRANSLATOR SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
    $app->register(new Silex\Provider\TranslationServiceProvider( $app ), [
        'locale'           => $app['language'],
        'locale_fallbacks' => ['en']

    ]);



/*
|--------------------------------------------------------------------------
|             REGISTER CONTROLLER SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
    $app->register(new Silex\Provider\ServiceControllerServiceProvider());




/*
|--------------------------------------------------------------------------
|             REGISTER URL GENERATOR SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
    $app->register(new Silex\Provider\UrlGeneratorServiceProvider());


/*
|--------------------------------------------------------------------------
|             REGISTER ELOQUENT/CAPSULE SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
    $app->register(
        new \BitolaCo\Silex\CapsuleServiceProvider(),
        [
            'capsule.connection' => [
                'driver'    => 'mysql',
                'host'      => 'localhost',
                'database'  => 'dooweb_web',
                'username'  => 'dooweb_web',
                'password'  => 'alltheway',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
                'logging'   => true, // Toggle query logging on this connection.
            ]
        ]
    );


/*
|--------------------------------------------------------------------------
|             REGISTER DOOWEBDEV DATABASE SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
    $app->register(new \Doowebdev\Core\Database\CoreDBServiceProvider());

/*
|--------------------------------------------------------------------------
|             REGISTER REQUEST AS A SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
    $app->register(new Doowebdev\Core\Requests\CoreRequestServiceProvider());


/*
|--------------------------------------------------------------------------
|             REGISTER AUTHENTICATION AND AUTHORIZATION SERVICE PROVIDER
                LOGIN AND REGISTER USER SYSTEM
|--------------------------------------------------------------------------
|
*/
$app->register(new Doowebdev\Core\Authentication\AuthServiceProvider());



/*
|--------------------------------------------------------------------------
|             REGISTER UPLOADS SERVICE PROVIDER
|--------------------------------------------------------------------------
|
*/
    $app->register(new \Doowebdev\Core\Upload\UploadServiceProvider());

