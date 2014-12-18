<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 28/11/2014
 * Time: 01:18
 */

namespace Doowebdev\Repositories\Post;


class PostRepository {

    public function findAll()
    {
        return[
            'name'=> 'freddie',
            'last_name'=>'Annobil-Dodoo',
            'location'=>'London'
        ];
    }

}