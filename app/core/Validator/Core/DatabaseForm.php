<?php


namespace Doowebdev\Core\Validator\Core;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class DatabaseForm
 * @package Doowebdev\Core\Validator\Core
 */
class DatabaseForm {

    /**
     * @var
     */
    protected $table;
    /**
     * @var
     */
    protected $model;

    /**
     * @param $table
     * @return $this
     */
    public function table( $table )
    {
        $this->table = $table;
        return $this;
    }

    /**
     * @param $data
     * @return bool
     */
    public function exists( $data )
    {
        $field = array_keys( $data )[0];
        return $this->where( $field, $data[$field])->count() ? true : false;
    }

    /**
     * @param $field
     * @param $value
     * @return $this
     */
    public function where( $field, $value )
    {
         return Capsule::table( $this->table )->where($field, $value);
    }



}
