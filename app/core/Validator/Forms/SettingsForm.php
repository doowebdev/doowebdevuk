<?php

namespace Doowebdev\Core\Validator\Forms;



use Doowebdev\Core\Validator\Core\FormValidation;

/**
 * Class SettingsForm
 * @package Doowebdev\Core\Validator\Forms
 */
class SettingsForm extends FormValidation{

    /**
     * @var array
     */
    protected $rules = [
        'site_title'=>[
            'required'=> true
        ],
        'site_url'=>[
            'required'=> true
        ]

    ];

}
