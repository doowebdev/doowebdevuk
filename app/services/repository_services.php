<?php

/*
|--------------------------------------------------------------------------
|            ADD REPOSITORIES TO CONTAINER AS SERVICES
|--------------------------------------------------------------------------
|
*/


    $app['posts.repository'] = $app->share(


    /**
     * @return \Doowebdev\Repositories\Post\PostRepository
     */
        function() {

            return new Doowebdev\Repositories\Post\PostRepository;
        });


