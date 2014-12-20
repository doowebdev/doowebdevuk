<?php


namespace  Doowebdev\Core\Database\UserGroup;

use \Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = 'users_groups';

    protected $fillable = array(
        'id',
        'user_id',
        'group_id'
    );
}
