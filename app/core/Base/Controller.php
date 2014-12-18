<?php

namespace Doowebdev\Core\Base;


use Silex\Application;

/**
 * Class Controller
 * @package Doowebdev\Core\Base
 */
abstract class Controller {


    /**
     * @var Application
     */
    protected $app;
    /**
     * @var array
     */
    protected $data = [];


    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->app['max.upload.size']  = 5000 * 1024;
        $this->data['token']           = $app['doo-csrf']->getToken();
        $this->data['current_user']    = $this->currentUser();
        $this->data['advertisement']   = $app['advertisement_db']->whereFirst('id',1);
        $this->data['social_username'] = $app['social_username_db']->whereFirst('id',1);
        $this->data['social_key']      = $app['social_key_db']->whereFirst('id',1);
        $this->data['pages']           = $app['page_db']->getAll();
    }


    /**
     * @return null
     */
    public function currentUser()
    {
        $this->app['authUser'] = $this->app['auth']->check();

        $user = $this->app['auth']->getUser();//get current user

        if ( $this->app['auth']->check() )//check if user is logged in
        {
            $current_user = $this->app['auth']->findUserById( $user->id );
        }
        else
        {
            $current_user = null;
        }

        return $current_user;
    }

}