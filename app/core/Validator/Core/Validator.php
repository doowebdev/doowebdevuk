<?php

namespace Doowebdev\Core\Validator\Core;


/**
 * Class Validator
 * @package Doowebdev\Core\Validator\Core
 */
class Validator {

    /**
     * @var
     */
    protected $items;
    /**
     * @var DatabaseForm
     */
    protected $db;
    /**
     * @var ErrorHandler
     */
    protected $errorHandler;
    /**
     * @var array
     */
    protected $rules = ['unique','required','maxlength','minlength','email', 'alphanumeric', 'match', 'yt_vimeo'];

    /**
     * @var array
     */
    public $erroMsgs = [
                'required'     => 'The :field field is required',
                'minlength'    => 'The :field field must be a minimum length of :satisfier',
                'maxlength'    => 'The :field field must be a maximum length of :satisfier',
                'email'        => 'This is not a valid email address',
                'alphanumeric' => 'The :field field must contain only letters and numbers',
                'match'        => 'The :field field must match the :satisfier field',
                'unique'       => 'That :field is already taken',
                'yt_vimeo'     => 'That :field must be a valid Youtube, Vimeo or Daily Motion video url'
            ];

    /**
     * @param DatabaseForm $db
     * @param ErrorHandler $errorHandler
     */
    public function  __construct(DatabaseForm $db, ErrorHandler $errorHandler)
    {
        $this->errorHandler = $errorHandler;
        $this->db = $db;
    }

    /**
     * @param $items
     * @param $rules
     * @return $this
     */
    public function check( $items, $rules )
    {
        $this->items = $items;

        foreach( $items as $item => $value )
        {
           if( in_array( $item, array_keys($rules) ) )
           {
                $this->validate([
                    'field'=> $item,
                    'value'=> $value,
                    'rules' => $rules[$item]
                ]);
           }

        }
        return $this;
    }

    /**
     * @return bool
     */
    public function fails()
    {
        return $this->errorHandler->hasErrors();
    }

    /**
     * @return ErrorHandler
     */
    public function errors()
    {
        return $this->errorHandler;
    }

    /**
     * @param $item
     */
    protected function validate( $item )
    {
        $field = $item['field'];

        foreach( $item['rules'] as $rule => $satisfier )
        {
            if( in_array( $rule, $this->rules ))
            {
                if( ! call_user_func_array( [ $this, $rule ], [ $field, $item['value'], $satisfier ] ) )
                {
                        $this->errorHandler->addError(
                            str_replace([':field',':satisfier'],[$field, $satisfier], $this->erroMsgs[$rule]),
                            $field );
                }
            }
        }

    }

    /**
     * @param $field
     * @param $value
     * @param $satisfier
     * @return bool
     */
    protected function required( $value )
    {
        $trim_value = trim($value);
        return !empty( $trim_value );
    }

    /**
     * @param $field
     * @param $value
     * @param $satisfier
     * @return bool
     */
    protected function minlength( $value, $satisfier )
    {
        return mb_strlen( $value ) >= $satisfier;
    }

    /**
     * @param $field
     * @param $value
     * @param $satisfier
     * @return bool
     */
    protected function maxlength( $value, $satisfier )
    {
        return mb_strlen( $value ) <= $satisfier;
    }

    /**
     * @param $field
     * @param $value
     * @param $satisfier
     * @return mixed
     */
    protected function email( $value )
    {
        return filter_var( $value, FILTER_VALIDATE_EMAIL );
    }

    /**
     * @param $field
     * @param $value
     * @param $satisfier
     * @return bool
     */
    protected function alphanumeric( $value )
    {
        return ctype_alnum( $value );
    }

    /**
     * @param $field
     * @param $value
     * @param $satisfier
     * @return bool
     */
    protected function match( $value, $satisfier )
    {
        return $value === $this->items[ $satisfier ];
    }

    /**
     * @param $field
     * @param $value
     * @param $satisfier
     * @return bool
     */
    protected function unique( $field, $value, $satisfier )
    {
        return !$this->db->table($satisfier)->exists([
            $field => $value
        ]);
    }

    /**
     * @param $field
     * @param $value
     * @param $satisfier
     * @return bool
     */
    protected function ytVimeo($value )
    {
        $clean_url    = trim( $value );
        $ex_video_url = explode('/', $clean_url);

        return  $ex_video_url[2] == 'www.youtube.com' || $ex_video_url[2] == 'vimeo.com'|| $ex_video_url[2] == 'www.dailymotion.com';

    }





















} 