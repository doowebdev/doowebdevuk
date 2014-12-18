<?php


namespace Doowebdev\Core\Validator\Forms;




use Doowebdev\Core\Validator\Core\FormValidation;

/**
 * Class SiteMetaForm
 * @package Doowebdev\Core\Validator\Forms
 */
class SiteMetaForm extends FormValidation{

    /**
     * @var array
     */
    protected $rules = [
        'site_meta_title'=>[
            'required'=> true
        ],
        'site_meta_description'=>[
            'required'=> true
        ],
        'site_meta_keywords'=>[
            'required'=> true
        ]

    ];

} 