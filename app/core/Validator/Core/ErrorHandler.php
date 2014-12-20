<?php

namespace Doowebdev\Core\Validator\Core;


/**
 * Class ErrorHandler
 * @package Doowebdev\Core\Validator\Core
 */
class ErrorHandler {

    /**
     * @var array
     */
    protected $errors = [];

    /**
     * @param $error
     * @param null $key
     */
    public function addError( $error, $key = null )
    {
        if( $key )
        {
            $this->errors[$key][] = $error;
        }
        else
        {
            $this->errors[] = $error;
        }
    }

    /**
     * @param null $key
     * @return array
     */
    public function all( $key = null )
    {
        return isset( $this->errors[$key] ) ? $this->errors[$key] : $this->errors;
    }

    /**
     * @return bool
     */
    public function hasErrors()
    {
        return count( $this->all() ) ? true : false ;
    }

    /**
     * @param $key
     * @return string
     */
    public function first( $key )
    {
        return isset( $this->all()[$key][0] ) ? $this->all()[$key][0] : '';
    }

    /**
     * @param $key
     * @return string
     */
    public function second( $key )
    {
        return isset( $this->all()[$key][1] ) ? $this->all()[$key][1] : '';
    }

    /**
     * @param $key
     * @return string
     */
    public function third( $key )
    {
        return isset( $this->all()[$key][2] ) ? $this->all()[$key][2] : '';
    }

    /**
     * @param $key
     * @return string
     */
    public function fourth( $key )
    {
        return isset( $this->all()[$key][3] ) ? $this->all()[$key][3] : '';
    }

    /**
     * @return mixed
     */
    public function sentry()
    {
        return \Exception;
    }



}
