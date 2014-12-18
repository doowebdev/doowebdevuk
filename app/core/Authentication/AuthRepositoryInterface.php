<?php


namespace Doowebdev\Core\Authentication;


/**
 * Interface AuthRepositoryInterface
 * @package Doowebdev\Core\Authentication
 */
interface AuthRepositoryInterface {

    /**
     * @return mixed
     */
    public function login();

    /**
     * @return mixed
     */
    public function logout();

    /**
     * @return mixed
     */
    public function check();

    /**
     * @return mixed
     */
    public function guest();

    /**
     * @return mixed
     */
    public function throttle();

    /**
     * @param array $array
     * @return mixed
     */
    public function createUser(array $array );

    /**
     * @return mixed
     */
    public function getUser();//gets current logged in user

    /**
     * @return mixed
     */
    public function findAllUsers();

    /**
     * @param $name
     * @return mixed
     */
    public function findGroupByName( $name );

    /**
     * @param $array
     * @return mixed
     */
    public function findUserByCredentials( $array );

    /**
     * @param $user_id
     * @return mixed
     */
    public function findUserById( $user_id );

    /**
     * @param $email
     * @return mixed
     */
    public function findUserByLogin( $email );

    /**
     * @param $credentials
     * @return mixed
     */
    public function authenticate( $credentials );

    /**
     * @param $user_group
     * @return mixed
     */
    public function findGroupById($user_group);



} 