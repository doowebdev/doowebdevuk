<?php


namespace Doowebdev\Core\Database\Advertisements;

use \Illuminate\Database\Eloquent\Model;

/**
 * Class Advertisement
 * @package Doowebdev\Core\Database\Advertisements
 */
class Advertisement extends Model
{
    /**
     * @var string
     */
    protected $table = 'advertisements';

    /**
     * @var array
     */
    protected $fillable = array(
        'id',
        'top_ad_logo',
        'top_ad',
        'side_ad',
        'bottom_ad',
        'side_box_ad'
    );







}