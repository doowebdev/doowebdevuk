<?php


namespace Doowebdev\Core\Authentication\Sentry2;


use Doowebdev\Core\Authentication\AuthRepositoryInterface;


/**
 * Class SentryRepository
 * @package Doowebdev\Core\Authentication\Sentry2
 */
class SentryRepository implements AuthRepositoryInterface {


    /**
     * @return mixed
     */
    public function login()
    {
        return Sentry::login();
    }

    /**
     * @return mixed
     */
    public function check()
    {
        return Sentry::check();
    }

    /**
     * @return mixed
     */
    public function throttle()
    {
        return Sentry::getThrottleProvider();
    }

    /**
     * @return mixed
     */
    public function guest()
    {
        return Sentry::guest();
    }

    /**
     * @param array $array
     * @return mixed
     */
    public function createUser(array $array )
    {
        return Sentry::createUser( $array );
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return Sentry::getUser();
    }

    /**
     * @return mixed
     */
    public function findAllUsers()
    {
        return Sentry::findAllUsers();
    }

    /**
     * @param $name
     * @return mixed
     */
    public function findGroupByName($name)
    {
        return Sentry::findGroupByName( $name );
    }

    /**
     * @param $user_group
     * @return mixed
     */
    public function findGroupById($user_group)
    {
        return Sentry::findGroupById($user_group);
    }

    /**
     * @param $array
     * @return mixed
     */
    public function findUserByCredentials( $array )
    {
        return Sentry::findUserByCredentials( $array );
    }

    /**
     * @param $user_id
     * @return mixed
     */
    public function findUserById( $user_id )
    {
        return Sentry::findUserById( $user_id );
    }

    /**
     * @param $email
     * @return mixed
     */
    public function findUserByLogin( $email )
    {
        return Sentry::findUserByLogin( $email );
    }

    /**
     * @param $credentials
     * @return mixed
     */
    public function authenticate( $credentials )
    {
        return Sentry::authenticate( $credentials, false );
    }

    /**
     * @return mixed
     */
    public function logout()
    {
        return Sentry::logout();
    }


}

