<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 20/09/2014
 * Time: 14:47
 */

namespace Doowebdev\Core\Validator\Forms;



use Doowebdev\Core\Validator\Core\FormValidation;

/**
 * Class DbInstallForm
 * @package Doowebdev\Core\Validator\Forms
 */
class DbInstallForm extends FormValidation{

    /**
     * @var array
     */
    protected $rules = [
        'databaseName'=>[
            'required'=> true
        ],
        'databasePassword'=>[
            'required'=> true
        ],
        'host'=>[
            'required'=> true
        ],
        'databaseUser'=>[
            'required'=> true
        ]

    ];

} 