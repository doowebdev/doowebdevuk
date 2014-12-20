<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 17/12/2014
 * Time: 22:49
 */

namespace Doowebdev\Core\Validator\Forms;


use Doowebdev\Core\Validator\Core\FormValidation;

class SocialKeysForm extends FormValidation{

    protected $rules = [
        'facebook_app_id'=>[
            'required'=> true
        ],
        'facebook_secret_key'=>[
            'required'=> true
        ],
        'twitter_app_id'=>[
            'required'=> true
        ],
        'twitter_secret_key'=>[
            'required'=> true
        ]

    ];

}
