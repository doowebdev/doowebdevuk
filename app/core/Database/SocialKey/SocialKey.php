<?php


namespace  Doowebdev\Core\Database\SocialKey;

use \Illuminate\Database\Eloquent\Model;


class SocialKey extends Model
{
    protected $table = 'social_media_keys';

    protected $fillable = array(
        'id',
        'facebook_public_key',
        'facebook_secret_key',
        'twitter_public_key',
        'twitter_secret_key'
    );
}
