<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 08/12/2014
 * Time: 19:35
 */

namespace Doowebdev\Core\Sessions\CSRF;

use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Class DooSession
 * @package Doowebdev\Core\Sessions
 */
class DooSilexCSRF {

    /**
     * @var Session
     */
    protected $session;


    public function __construct()
    {
        $this->session = new Session();
        $this->_generateCSRFToken();
    }

    /**
     * Get token for CSRF
     * @return mixed
     */
    public function getToken()
    {
        return $this->session->get( 'token' );
    }

    /**
     * @return bool
     */
    public function checkCsrf()
    {
        return $this->_checkToken( htmlspecialchars( $_POST['token'] ) );
    }


    /**
     * @param $name
     * @param $value
     * @return null
     */
    public function setSession($name, $value)
    {
        //$this->session->set( $name,$value );
        if( isset( $name ) )
        {
             $this->session->set( $name,$value );
        }

        return null;
    }


    /**
     * @param $name
     * @return bool
     */
    public function sessionExists( $name )
    {
        $session = $this->session->get( $name );
        return ( isset( $session ) ) ? true : false;
    }

    /**
     * @param $name
     * @return mixed|null
     */
    public function getSession( $name )
    {
        $session = $this->session->get( $name );
        //return $this->session->get( $name );
        if( isset( $session ) )
        {
            return $session;
        }

        return null;
    }


    /**
     * @param $name
     */
    public function deleteSession( $name )
    {
        $session = $this->session->get( $name );
        if( $this->sessionExists( $name ) )
        {
            unset( $session );
        }
    }


    /**
     * Set a Flash Message
     * @param $tag
     * @param array $message
     * @return mixed
     */
    public function setFlashMessage( $tag, array $message )
    {
        return $this->session->getFlashBag()->add( $tag, $message );
    }


    /**
     * Get a Flash Message
     * @param $tag
     * @param array $array
     * @return array
     */
    public function getFlashMessage( $tag, array $array)
    {
        return $this->session->getFlashBag()->get( $tag, $array );
    }

    /**
     * Generate Token for CSRF - private
     */
    private function _generateCSRFToken()
    {
        $this->session->set('token', md5( uniqid() ) );
    }

    /**
     * Check token for CSRF - private
     * @param $token
     * @return bool
     */
    private function _checkToken( $token )
    {
        $token_name = 'token';
        $this->sessionExists( $token_name );
        if($this->sessionExists( $token_name ) && $token == $this->sessionExists( $token_name ) )
        {
            $this->deleteSession( $token_name );
            return true;
        }
        return false;
    }










}