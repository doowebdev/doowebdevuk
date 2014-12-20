<?php


namespace Doowebdev\Core\Validator\Forms;



use Doowebdev\Core\Validator\Core\FormValidation;

/**
 * Class RegisterUserForm
 * @package Doowebdev\Core\Validator\Forms
 */
class RegisterUserForm extends FormValidation{

    /**
     * @var array
     */
    protected $rules = [
        'username'=>[
            'required'=> true,
            'unique'  => 'users'
        ],
        'email'=>[
            'required'=> true,
            'unique'  => 'users'
        ],
        'password'=>[
            'required'=> true
        ]
    ];

}
