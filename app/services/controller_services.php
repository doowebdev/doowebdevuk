<?php

/*
|--------------------------------------------------------------------------
|             ADD CONTROLLERS TO CONTAINER AS SERVICES
|--------------------------------------------------------------------------
|
*/

    $app['posts.controller'] = $app->share(

    /**
     * @return \Doowebdev\Controllers\PostController
     */
    function() use ($app) {

        return new Doowebdev\Controllers\PostController( $app );
    });


