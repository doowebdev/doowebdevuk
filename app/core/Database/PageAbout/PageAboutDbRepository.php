<?php


namespace  Doowebdev\Core\Database\PageAbout;


use  Doowebdev\Core\Database\DbBaseRepository;

class PageAboutDbRepository extends DbBaseRepository{

    protected $model;

    public function __construct()
    {
        $this->model = New PageAbout();
    }
}
