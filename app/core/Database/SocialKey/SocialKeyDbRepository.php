<?php


namespace  Doowebdev\Core\Database\SocialKey;


use  Doowebdev\Core\Database\DbBaseRepository;

class SocialKeyDbRepository extends DbBaseRepository{

    protected $model;

    public function __construct()
    {
        $this->model = new SocialKey();
    }

}
