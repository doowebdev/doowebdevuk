<?php


namespace  Doowebdev\Core\Database\PageAbout;

use \Illuminate\Database\Eloquent\Model;

class PageAbout extends Model
{
    protected $table = 'page_about';

    protected $fillable = array(
        'name',
        'content',
        'slug',
    );


}
