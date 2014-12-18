<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 28/11/2014
 * Time: 01:17
 */

namespace Doowebdev\Controllers;


use Doowebdev\Core\Base\Front;
use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Request;

class PostController extends Front
{

    public function indexJsonAction()
    {

        $name='freddie';
        $json = new JsonResponse($this->app['posts.repository']->findAll());

        $items = new JsonResponse($this->app['Item_db']->getAll());

        return   $this->app['twig']->render(
            'themes/'.$this->app['theme'].'/main/home.twig',
            compact('name','json', 'items')
        );
    }

    public function store()
    {
        //$request = Request::createFromGlobals();
        $nameRequest = $this->input->request->get('name');

        return '$nameRequest: '.$nameRequest;
    }
}