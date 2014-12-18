<?php


namespace Doowebdev\Core\Validator\Forms;



use Doowebdev\Core\Validator\Core\FormValidation;

/**
 * Class SettingsInstallForm
 * @package Doowebdev\Core\Validator\Forms
 */
class SettingsInstallForm extends FormValidation{

    /**
     * @var array
     */
    protected $rules = [
        'site_url'=>[
            'required'=> true
        ],
        'site_title'=>[
            'required'=> true
        ]

    ];
} 