<?php


namespace  Doowebdev\Core\Database\SocialUsername;

use \Illuminate\Database\Eloquent\Model;

class SocialUsername extends Model
{

    protected $table = 'social_media_username';

    protected $fillable = array(
        'id',
        'facebook_user',
        'twitter_user',
        'gplus_user'
    );

}
