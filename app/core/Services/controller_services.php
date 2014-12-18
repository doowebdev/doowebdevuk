<?php



$app['loginAdmin.controller'] = $app->share(

/**
* @return \Doowebdev\Core\Admin\LoginController
*/
function() use ($app) {

    return new Doowebdev\Core\Admin\LoginController( $app );
});


$app['dashboard.controller'] = $app->share(

/**
* @return \Doowebdev\Core\Admin\DashboardController
*/
function() use ($app) {

    return new Doowebdev\Core\Admin\DashboardController( $app );
});



$app['generalSettings.controller'] = $app->share(

/**
* @return \Doowebdev\Core\Admin\GeneralSettingsController
*/
function() use ($app) {

    return new Doowebdev\Core\Admin\GeneralSettingsController( $app );
});



$app['ads.controller'] = $app->share(

/**
* @return \Doowebdev\Core\Admin\AdsController
*/
function() use ($app) {

    return new Doowebdev\Core\Admin\AdsController( $app );
});



$app['siteMetas.controller'] = $app->share(

/**
* @return \Doowebdev\Core\Admin\AdsController
*/
function() use ($app) {

return new Doowebdev\Core\Admin\SitemetasController( $app );
});


$app['uploadLogo.controller'] = $app->share(

    function() use ($app) {

        return new Doowebdev\Core\Admin\UploadLogoController( $app );
    });

$app['siteMap.controller'] = $app->share(

    function() use ($app) {

        return new \Doowebdev\Core\Admin\SiteMapController( $app );
    });

$app['socialUsername.controller'] = $app->share(

    function() use ($app) {

        return new \Doowebdev\Core\Admin\SocialUsernameController( $app );
    });

$app['socialKey.controller'] = $app->share(

    function() use ($app) {

        return new \Doowebdev\Core\Admin\SocialKeyController( $app );
    });

$app['page.controller'] = $app->share(

    function() use ($app) {

        return new \Doowebdev\Core\Admin\PageController( $app );
    });














