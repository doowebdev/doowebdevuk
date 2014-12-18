<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 14/12/2014
 * Time: 23:01
 */

namespace Doowebdev\Core\Upload;


use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Class UploadServiceProvider
 * @package Doowebdev\Core\Upload
 */
class UploadServiceProvider implements ServiceProviderInterface{

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

        $app['doo-upload'] = $app->share( function() use( $app ){

            $upload =  new Upload(  __DIR__ .'/../../../src/Storage/uploads/'. $app['upload.folder'].'/');
            $upload->setMaxSize( $app['max.upload.size'] );
            $upload->allowAllTypes();
            return $upload;
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