<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 13/09/2014
 * Time: 22:51
 */

namespace Doowebdev\Core\Validator\Forms;




use Doowebdev\Core\Validator\Core\FormValidation;

/**
 * Class PageForm
 * @package Doowebdev\Core\Validator\Forms
 */
class PageForm extends FormValidation{

    /**
     * @var array
     */
    protected $rules = [
        'description'=>[
            'required'=> true
        ],
        'pageTitle'=>[
            'required'=> true
        ],
        'slug'=>[
            'required'=> true
        ],
        'order'=>[
            'required'=> true
        ]

    ];

}
