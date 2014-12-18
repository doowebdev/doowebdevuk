<?php

namespace Doowebdev\Core\Validator\Core;

//use DooRepositories\FormValidation\Database;

/**
 * Class FormValidation
 * @package Doowebdev\Core\Validator\Core
 */
abstract class FormValidation extends Validator{

    /**
     * @var
     */
    protected $validation;
    /**
     * @var Validator
     */
    protected $validator;
    /**
     * @var DatabaseForm
     */
    protected $database;


    /**
     *
     */
    public function __construct()
    {
        $errorHandler    = new ErrorHandler;
        $db              = new DatabaseForm();
        $this->validator = new Validator($db, $errorHandler );
        $this->database = $db;
    }

    /**
     * @param array $formData
     * @return bool
     * @throws DooFormValidationException
     */
    public function validator(array $formData)
    {
        $this->validation = $this->validator->check( $formData, $this->validationRules() );

        if( $this->validation->fails() )
        {
            throw new DooFormValidationException('Validation failed', $this->validation->errors() );
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function validationFails()
    {
        return $this->validation->fails();
    }

    /**
     * @param $field
     * @param $order
     * @return mixed
     */
    public function getErrorFor($field, $order )
    {
        return $this->validation->errors()->$order( $field );
    }

    /**
     * @return array
     */
    protected function validationRules()
    {
        return $this->rules;
    }



} 