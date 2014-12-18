<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 07/12/2014
 * Time: 01:45
 */

namespace Doowebdev\Core\Base;



use Silex\Application;

/**
 * Class Front
 * @package Doowebdev\Core\Base
 */
abstract class Front extends Controller{


    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->app = $app;
        $this->app['authUser'] = $this->app['auth']->check();
    }





}