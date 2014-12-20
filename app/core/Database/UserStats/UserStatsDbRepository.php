<?php


namespace  Doowebdev\Core\Database\UserStats;


use  Doowebdev\Core\Database\DbBaseRepository;

class UserStatsDbRepository extends DbBaseRepository{

    protected $model;

    public function __construct()
    {
        $this->model = New UserStat();
    }

    public function googleChartUsers()
    {
       return $this->model->getFormattedUsers();
    }

}
