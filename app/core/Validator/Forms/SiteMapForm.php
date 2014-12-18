<?php

namespace Doowebdev\Core\Validator\Forms;




use Doowebdev\Core\Validator\Core\FormValidation;

/**
 * Class SiteMapForm
 * @package Doowebdev\Core\Validator\Forms
 */
class SiteMapForm extends FormValidation{

    /**
     * @var array
     */
    protected $rules = [
        'item_priority'=>[
            'required'=> true
        ],
        'item_frequency'=>[
            'required'=> true
        ],
        'page_priority'=>[
            'required'=> true
        ],
        'page_frequency'=>[
            'required'=> true
        ]

    ];

} 