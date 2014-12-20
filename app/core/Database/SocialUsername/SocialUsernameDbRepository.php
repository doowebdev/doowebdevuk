<?php


namespace  Doowebdev\Core\Database\SocialUsername;


use  Doowebdev\Core\Database\DbBaseRepository;

class SocialUsernameDbRepository extends DbBaseRepository{

    protected $model;

    public function __construct()
    {
        $this->model = new SocialUsername();
    }
}
