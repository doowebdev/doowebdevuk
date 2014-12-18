<?php

namespace Doowebdev\Core\Validator\Core;


/**
 * Class DooFormValidationException
 * @package Doowebdev\Core\Validator\Core
 */
class DooFormValidationException extends \Exception{


    /**
     * @var int
     */
    protected $errors;


    /**
     * @param string $message
     * @param int $errors
     */
    public function __construct( $message, $errors )
    {
        $this->errors = $errors;

        parent::__construct( $message );
    }

    /**
     * @return int
     */
    public function getErrorFor()
    {
        return $this->errors;
    }




} 