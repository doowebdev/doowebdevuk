<?php


namespace Doowebdev\Core\Validator;


use Doowebdev\Core\Validator\Forms\SettingsForm;
use Doowebdev\Core\Validator\Forms\SiteMapForm;
use Doowebdev\Core\Validator\Forms\SiteMetaForm;
use Doowebdev\Core\Validator\Forms\SocialKeysForm;
use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Class CoreFormValidationServiceProvider
 * @package Doowebdev\Core\Validator\Forms
 */
class CoreFormValidationServiceProvider implements ServiceProviderInterface{

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
        $app['settings-form'] = $app->share( function() {

            return new SettingsForm();
        });

        $app['settings-metas-form'] = $app->share( function() {

            return new SiteMetaForm();
        });

        $app['site-map-form'] = $app->share( function() {

            return new SiteMapForm();
        });

        $app['social-key-form'] = $app->share( function() {

            return new SocialKeysForm();
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
