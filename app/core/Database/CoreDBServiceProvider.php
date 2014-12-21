<?php
/**
 * Created by PhpStorm.
 * User: freddie
 * Date: 11/12/2014
 * Time: 19:46
 */

namespace Doowebdev\Core\Database;


use Doowebdev\Core\Database\Advertisements\AdvertisementDbRepository;
use Doowebdev\Core\Database\Authentication\AuthenticationDbRepository;
use Doowebdev\Core\Database\GeneralSettings\GeneralSettingDbRepository;
use Doowebdev\Core\Database\Group\GroupDbRepository;
use Doowebdev\Core\Database\Items\ItemDbRepository;
use Doowebdev\Core\Database\Logo\LogoDbRepository;
use Doowebdev\Core\Database\Page_about\Page_AboutDbRepository;
use Doowebdev\Core\Database\Pages\PageDbRepository;
use Doowebdev\Core\Database\Profiles\ProfileDbRepository;
use Doowebdev\Core\Database\Site_Metas\SiteMetaDbRepository;
use Doowebdev\Core\Database\SiteMap\SiteMapDbRepository;
use Doowebdev\Core\Database\Social_Key\SocialKeyDbRepository;
use Doowebdev\Core\Database\Social_Username\SocialUsernameDbRepository;
use Doowebdev\Core\Database\User\UserDbRepository;
use Doowebdev\Core\Database\User_Group\UserGroupDbRepository;
use Doowebdev\Core\Database\User_Stats\UserStatsDbRepository;
use Silex\Application;
use Silex\ServiceProviderInterface;

class CoreDBServiceProvider implements ServiceProviderInterface{

    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Application $app An Application instance
     */
    public function register(Application $app)
    {

        $app['users_db'] = $app->share(

            function() {

                return new UserDbRepository();
            });


        $app['user_stats_db'] = $app->share(

            function() {

                return new UserStatsDbRepository();
            });


        $app['users_group_db'] = $app->share(

            function() {

                return new UserGroupDbRepository();
            });


        $app['general_setting_db'] = $app->share(

            function() {

                return new GeneralSettingDbRepository();
            });

        $app['site_meta_db'] = $app->share(

            function() {

                return new SiteMetaDbRepository();
            });

        $app['advertisement_db'] = $app->share(

            function() {

                return new AdvertisementDbRepository();
            });

        $app['authentication_social_db'] = $app->share(

            function() {

                return new AuthenticationDbRepository();
            });

        $app['group_db'] = $app->share(

            function() {

                return new GroupDbRepository();
            });

        $app['Item_db'] = $app->share(

            function() {

                return new ItemDbRepository();
            });

        $app['logo_db'] = $app->share(

            function() {

                return new LogoDbRepository();
            });

        $app['page_about_db'] = $app->share(

            function() {

                return new Page_AboutDbRepository();
            });

        $app['page_db'] = $app->share(

            function() {

                return new PageDbRepository();
            });

        $app['profile_db'] = $app->share(

            function() {

                return new ProfileDbRepository();
            });

        $app['site_map_db'] = $app->share(

            function() {

                return new SiteMapDbRepository();
            });

        $app['social_key_db'] = $app->share(

            function() {

                return new SocialKeyDbRepository();
            });

        $app['social_username_db'] = $app->share(

            function() {

                return new SocialUsernameDbRepository();
            });



    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app)
    {

    }
}
