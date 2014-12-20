<?php


namespace  Doowebdev\Core\Database\UserGroup;


use  Doowebdev\Core\Database\DbBaseRepository;

class UserGroupDbRepository extends DbBaseRepository{

    protected $model;

    public function __construct()
    {
        $this->model = New UserGroup();
    }
}
