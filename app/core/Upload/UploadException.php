<?php


namespace Doowebdev\Core\Upload;


/**
 * Class UploadException
 * @package Doowebdev\Core\Upload
 */
class UploadException extends \Exception{


    /**
     * @param string $message
     */
    function __construct( $message )
    {

        parent::__construct( $message );
    }

}
