<?php

/***************************************************************************
 *
 *                          ADMIN ROUTES
 */

$admin_area = 'admin-area';

# Admin Login and Logout
$app->get('/'.$admin_area.'/login', "loginAdmin.controller:index")->bind('login');
$app->get('/'.$admin_area.'/logout', "loginAdmin.controller:logout");
$app->post('/'.$admin_area.'/login', "loginAdmin.controller:postLogin");

# Dashboard
$app->get('/'.$admin_area.'/dashboard', "dashboard.controller:index")->bind('dashboard');

# Dashboard -  User Stats api
$app->get('/api/user_stats', "dashboard.controller:userStats");

# Setting
$app->get('/'.$admin_area.'/settings', "generalSettings.controller:show")->bind('generalSettings');
$app->post('/'.$admin_area.'/put-settings', "generalSettings.controller:update");

#Advertisement spaces
$app->get('/'.$admin_area.'/ad-boxes', "ads.controller:show")->bind('adBoxes');
$app->post('/'.$admin_area.'/ad-boxes', "ads.controller:update");

#Site details/meta
$app->get('/'.$admin_area.'/site-details', "siteMetas.controller:show")->bind('siteMetas');
$app->post('/'.$admin_area.'/site-details', "siteMetas.controller:update");

# Logo
$app->get('/'.$admin_area.'/upload-logo', "uploadLogo.controller:show")->bind('uploadLogo');
$app->post('/'.$admin_area.'/upload-logo', "uploadLogo.controller:upload");

# Site map
$app->get('/'.$admin_area.'/sitemap', "siteMap.controller:show")->bind('siteMap');
$app->post('/'.$admin_area.'/sitemap', "siteMap.controller:addSettings");
$app->post('/'.$admin_area.'/sitemap/generate', "siteMap.controller:generate")->bind('generate');

# Social media username
$app->get('/'.$admin_area.'/social-username', "socialUsername.controller:show")->bind('socialUsername');
$app->post('/'.$admin_area.'/social-username', "socialUsername.controller:update");

# Social media api keys
$app->get('/'.$admin_area.'/social-keys', "socialKey.controller:show")->bind('socialKey');
$app->post('/'.$admin_area.'/social-keys', "socialKey.controller:update");

# Pages
$app->get('/'.$admin_area.'/pages', "page.controller:index")->bind('pages');
$app->get('/'.$admin_area.'/page', "page.controller:create")->bind('page');
$app->post('/'.$admin_area.'/page', "page.controller:store");
$app->get('/'.$admin_area.'/page/{id}/edit', "page.controller:edit")->bind('editPage');
$app->put('/'.$admin_area.'/page/{id}', "page.controller:update")->bind('updatePage');
$app->get('/'.$admin_area.'/page/{id}/delete', "page.controller:delete")->bind('deletePage');

/*
    # Pages
    \Route::get('/pages','Doowebdev\Admin\PageController:index' );
    \Route::get('/page','Doowebdev\Admin\PageController:create' );
    \Route::post('/page','Doowebdev\Admin\PageController:store' );
    \Route::get('/page/:id/edit','Doowebdev\Admin\PageController:edit' );
    \Route::put('/page/:id','Doowebdev\Admin\PageController:update' );
    \Route::get('/page/:id/delete','Doowebdev\Admin\PageController:delete' );

    # Users
    \Route::get('/users','Doowebdev\Admin\UserController:index' );
    \Route::get('/user','Doowebdev\Admin\UserController:create' );
    \Route::post('/user','Doowebdev\Admin\UserController:store' );
    \Route::get('/user/:id/edit','Doowebdev\Admin\UserController:edit' );
    \Route::put('/user/:id/edit','Doowebdev\Admin\UserController:update' );
    \Route::get('/user/:id/delete','Doowebdev\Admin\UserController:delete' );
 *
 */






