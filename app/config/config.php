<?php

/*
|--------------------------------------------------------------------------
|              LANGUAGE
|--------------------------------------------------------------------------
| Set Language
*/


$app['language'] = 'en';


/*
|--------------------------------------------------------------------------
|              SITE MAP
|--------------------------------------------------------------------------
| Set to no to show/activate 'the number of items to show in rss and site map'. Set to yes to show all
| items in site map.
*/

$app['show_all_items_in_sitemap'] = 'no';//set to: yes or no,

/*
|--------------------------------------------------------------------------
|              RSS FEED
|--------------------------------------------------------------------------
| Set to no to show 'the number of items to show in rss and site map'. Set to yes to show all
| items in rss feed.
*/

$app['show_all_items_in_rss_feed'] = 'no';//set to: yes or no

/*
|--------------------------------------------------------------------------
|              NUMBER OF ITEMS TO SHOW IN RSS AND SITE MAP
|--------------------------------------------------------------------------
| Enter the number of items that will be shown in the rss feed and site map if
| they are set to no. Default 1000.
*/

$app['number_of_items_to_show'] = 1000;

/*
|--------------------------------------------------------------------------
|              NUMBER OF ITEMS TO SHOW PER PAGE
|--------------------------------------------------------------------------
| Enter the number of items that will be shown per page.
| Default 18.
*/

$app['per_page'] = 18;

/*
|--------------------------------------------------------------------------
|              NUMBER OF ITEMS TO SHOW IN RECENT ITEMS
|--------------------------------------------------------------------------
| Enter the number of items that will be shown under 'Recent Items' located at the bottom of each
| page. Default 15.
*/

$app['recent_items'] = 15;

/*
|--------------------------------------------------------------------------
|              NUMBER OF ITEMS TO SHOW IN LATEST ITEMS
|--------------------------------------------------------------------------
| Enter the number of items that will be shown under 'Latest Items' located at the side of each
| page. Default 5.
*/

$app['latest_items_side'] = 5;

/*
|--------------------------------------------------------------------------
|              THEME NAME
|--------------------------------------------------------------------------
|
|
*/

$app['theme'] = 'default';

