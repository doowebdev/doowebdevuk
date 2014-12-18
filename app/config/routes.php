<?php

$app->get('/', "posts.controller:indexJsonAction")->bind('home');

$app->post('/post', "posts.controller:store");
