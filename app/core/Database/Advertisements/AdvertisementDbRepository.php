<?php


namespace Doowebdev\Core\Database\Advertisements;


use Doowebdev\Core\Database\DbBaseRepository;

/**
 * Class AdvertisementDbRepository
 * @package Doowebdev\Core\Database\Advertisements
 */
class AdvertisementDbRepository  extends DbBaseRepository{

    /**
     * @var Advertisement
     */
    protected $model;

    public function __construct()
    {
        $this->model = New Advertisement();
    }

    //public function createOrUpdate($if, $flash_msg_name, array $createArray, array $updateArray, $updateId)

}
