<?php


namespace  Doowebdev\Core\Database\UserStats;

use \Illuminate\Database\Eloquent\Model;


class UserStat extends Model
{
    protected $table = 'user_stats';

    protected $fillable = array(
        'id',
        'name',
        'count'
    );

    public static function getFormattedUsers()
    {
        $users = self::all();

        $json = array();
        $json['cols'] = array(
            array('label'=>'User', 'type'=>'string'),
            array('label'=>'Count', 'type'=>'number')
        );

        foreach( $users as $user )
        {
            $json['rows'][] = array('c'=>array(
                array('v'=>$user->name),
                array('v'=>$user->count),
            ));
        }

        return $json;
    }

}
