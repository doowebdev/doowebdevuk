<?php

namespace Doowebdev\Core\Base;



use \Silex\Application;

/**
 * Class Admin
 * @package Doowebdev\Core\Base
 */
abstract class Admin extends Controller{

    /**
     * @var
     */
    protected $settingsForm;


    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);

        $this->adminAuthenticate();

        $this->data['settings']                = $app['general_setting_db']->whereFirst('id',1 );//sticky
        $this->data['siteMetaDetails']         = $app['site_meta_db']->whereFirst('id',1);
        $this->data['adminFormErrorMessages']  = $app['doo-csrf']->getFlashMessage( 'adminFormErrors',[] );
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function authenticate()
    {
        if ( $this->app['auth']->check() )
        {
            $this->adminAuthenticate();
        }

        return $this->app->redirect( $this->app['url_generator']->generate('login') );

    }


    /**
     * @return string|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function adminAuthenticate()
    {
        $get_user = $this->app['auth']->getUser();

        $user     = $this->app['auth']->findUserByID( $get_user->id );

        $manager  = $this->app['auth']->findGroupByName('Manager');

        $staff    = $this->app['auth']->findGroupByName('Staff');

        if ( ! $user->inGroup( $manager ) )//check if superadmin
        {
            if ( ! $user->inGroup( $staff ) )//check if staff
            {
               return $this->app->redirect( $this->app['url_generator']->generate('login') );
            }
        }
        return '';

    }

}
