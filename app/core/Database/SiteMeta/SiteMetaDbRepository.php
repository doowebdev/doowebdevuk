<?php


namespace  Doowebdev\Core\Database\SiteMeta;


use  Doowebdev\Core\Database\DbBaseRepository;

class SiteMetaDbRepository extends  DbBaseRepository{

    protected $model;

    public function __construct()
    {
        $this->model = New SiteMeta();
    }

}
