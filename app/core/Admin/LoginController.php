<?php


namespace Doowebdev\Core\Admin;


use Doowebdev\Core\Base\Front;

/**
 * Class LoginController
 * @package Doowebdev\Core\Admin
 */
class LoginController extends Front{


    /**
     * @return mixed
     */
    public function index()
    {
        $this->data['msg'] = $this->app['doo-csrf']->getFlashMessage( 'loginError',[] );

        return $this->app['twig']->render(
            'admin/login/login.twig',
            $this->data
        );
    }

    /**
     * @return string|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function postLogin()
    {

        if( $this->app['doo-csrf']->checkCsrf() )
        {
            $throttleProvider = $this->app['auth']->throttle();
            $throttleProvider->enable();

            $throttle = $throttleProvider->findByUserLogin($this->app['request']->get('email'));
            $throttle->setAttemptLimit(3);
            $throttle->setSuspensionTime(10);

            $credentials = [
                'email'    => $this->app['request']->get('email'),
                'password' => $this->app['request']->get('password'),
            ];

            $this->app['auth']->authenticate( $credentials );

            return $this->app->redirect( $this->app['url_generator']->generate('dashboard') );
        }

        return '';

    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function logout()
    {
        // log admin out
        $this->app['auth']->logout();
        return $this->app->redirect( $this->app['url_generator']->generate('login') );
    }



}
