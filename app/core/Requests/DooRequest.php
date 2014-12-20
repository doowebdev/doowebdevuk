<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 12/12/2014
 * Time: 11:52
 */

namespace Doowebdev\Core\Requests;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class DooRequest
 * @package Doowebdev\Core\Requests
 */
class DooRequest {

    /**
     * @var Request
     */
    protected $request;


    function __construct()
    {
        $this->request = Request::createFromGlobals();
    }

    /**
     * @return array|string
     */
    public function redirectBack()
    {
        return $this->request->headers->get('referer');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function get( $value )
    {
        return $this->request->request->get( $value );
    }


}
