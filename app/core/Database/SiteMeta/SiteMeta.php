<?php


namespace  Doowebdev\Core\Database\SiteMeta;

use \Illuminate\Database\Eloquent\Model;


class SiteMeta extends Model
{

    protected $table = 'site_metas';

    protected $fillable = array(
        'id',
        'title',
        'description',
        'keywords'
    );

}
