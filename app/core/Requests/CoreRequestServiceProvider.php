<?php

namespace Doowebdev\Core\Requests;


use Silex\Application;
use Silex\ServiceProviderInterface;


/**
 * Class CoreRequestServiceProvider
 * @package Doowebdev\Core\Requests
 */
class CoreRequestServiceProvider implements ServiceProviderInterface{

    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Application $app An Application instance
     */
    public function register(Application $app)
    {
        $app['doo-request'] = $app->share( function() {

                return new DooRequest();
            });
    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app)
    {

    }
}
