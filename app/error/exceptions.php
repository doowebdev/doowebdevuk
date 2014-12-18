<?php
use Cartalyst\Sentry\Throttling\UserBannedException;
use Cartalyst\Sentry\Throttling\UserSuspendedException;
use Cartalyst\Sentry\Users\LoginRequiredException;
use Cartalyst\Sentry\Users\PasswordRequiredException;
use Cartalyst\Sentry\Users\UserNotFoundException;
use Cartalyst\Sentry\Users\WrongPasswordException;
use Doowebdev\Core\Validator\Core\DooFormValidationException;


/*************************************************************************************************************
 *
 *                                     ADMIN LOGIN EXCEPTIONS
 */

    $app->error(
    /**
     * @param LoginRequiredException $e
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    function (LoginRequiredException $e) use($app){

        $app['doo-csrf']->setFlashMessage( 'loginError', ['content'=> 'Your have entered wrong login details'] );
        return $app->redirect( $app['url_generator']->generate('login') );

    });

    $app->error(
    /**
     * @param PasswordRequiredException $e
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    function (PasswordRequiredException $e) use($app){

        $app['doo-csrf']->setFlashMessage( 'loginError', ['content'=> 'Your have entered wrong login details'] );
        return $app->redirect( $app['url_generator']->generate('login') );

    });

    $app->error(
    /**
     * @param UserNotFoundException $e
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    function (UserNotFoundException  $e) use($app){

        $app['doo-csrf']->setFlashMessage( 'loginError', ['content'=> 'Your have entered wrong login details'] );
        return $app->redirect( $app['url_generator']->generate('login') );

    });

    $app->error(
    /**
     * @param WrongPasswordException $e
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    function (WrongPasswordException $e) use($app){

        $app['doo-csrf']->setFlashMessage( 'loginError', ['content'=> 'Your have entered wrong login details'] );
        return $app->redirect( $app['url_generator']->generate('login') );

    });

    $app->error(
    /**
     * @param UserSuspendedException $e
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    function (UserSuspendedException $e) use($app){

        $app['doo-csrf']->setFlashMessage( 'loginError', ['content'=> $e->getMessage()] );
        return $app->redirect( $app['url_generator']->generate('login') );

    });

    $app->error(
    /**
     * @param UserBannedException $e
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    function (UserBannedException $e) use($app){

        $app['doo-csrf']->setFlashMessage( 'loginError', ['content'=> $e->getMessage()] );
        return $app->redirect( $app['url_generator']->generate('login') );

    });


/*************************************************************************************************************
 *
 *                                     ADMIN AREA FORM EXCEPTIONS
 */

    //General Settings Form Exceptions
    $app->error(
    /**
     * @param DooFormValidationException $e
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    function (DooFormValidationException $e) use($app){

        $app['doo-csrf']->setFlashMessage( 'adminFormErrors', [
            'site_title'            => $e->getErrorFor()->first('site_title'),
            'site_url'              => $e->getErrorFor()->first('site_url'),
            'site_meta_title'       => $e->getErrorFor()->first('site_meta_site_title'),
            'site_meta_description' => $e->getErrorFor()->first('site_meta_description'),
            'site_meta_keywords'    => $e->getErrorFor()->first('site_meta_keywords'),
            'item_priority'         => $e->getErrorFor()->first('item_priority'),
            'item_frequency'        => $e->getErrorFor()->first('item_frequency'),
            'page_priority'         => $e->getErrorFor()->first('page_priority'),
            'page_frequency'        => $e->getErrorFor()->first('page_frequency'),
            'facebook_app_id'       => $e->getErrorFor()->first('facebook_app_id'),
            'facebook_secret_key'   => $e->getErrorFor()->first('facebook_secret_key'),
            'twitter_app_id'        => $e->getErrorFor()->first('twitter_app_id'),
            'twitter_secret_key'    => $e->getErrorFor()->first('twitter_secret_key')
        ] );

        return $app->redirect( $app['doo-request']->redirectBack() );

    });
