<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 11/12/2014
 * Time: 14:36
 */

namespace Doowebdev\Core\Sessions;


use Doowebdev\Core\Sessions\Csrf\DooSilexCsrf;
use Silex\Application;
use Silex\ServiceProviderInterface;

class DooSessionServiceProvider implements ServiceProviderInterface{

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
        $app['doo-csrf'] = $app->share( function() {

                return new DooSilexCsrf();
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