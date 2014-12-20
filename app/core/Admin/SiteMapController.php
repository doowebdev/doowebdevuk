<?php namespace Doowebdev\Core\Admin;


use Doowebdev\Core\Base\Admin;
use SitemapPHP\Sitemap;


/**
 * Class SiteMapController
 * @package Doowebdev\Core\Admin
 */
class SiteMapController extends Admin{


    /**
     * @return mixed
     */
    public function show()
    {
        //sticky
        $video_sitemap_setting        = $this->app['site_map_db']->whereFirst('id',1);
        $this->data['item_priority']  = $video_sitemap_setting->priority;
        $this->data['item_frequency'] = $video_sitemap_setting->freqency;
        //sticky
        $page_sitemap_setting         = $this->app['site_map_db']->whereFirst('id',2);
        $this->data['page_priority']  = $page_sitemap_setting->priority;
        $this->data['page_frequency'] = $page_sitemap_setting->freqency;

        $this->data['siteMapGeneratedMsg'] = $this->app['doo-csrf']->getFlashMessage( 'siteMapGenerated',[] );
        $this->data['siteMapUpdatedMsg']   = $this->app['doo-csrf']->getFlashMessage( 'siteMapUpdated',[] );

        return   $this->app['twig']->render(
            'admin/setting/sitemap.twig',
            $this->data
        );

    }


    /**
     * Generate Site Map
     * @return string|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function generate()
    {
        if( $this->app['doo-csrf']->checkCsrf() )
        {
            $sitemap = new Sitemap( $this->app['url_generator']->generate('home') );
            $sitemap->setPath(__DIR__.'/../../../src/Storage/sitemap/');

            if( $this->app['show_all_items_in_sitemap'] == 'yes'){
                $items = $this->app['Item_db']->sitemapItem();
            }
            if( $this->app['show_all_items_in_sitemap'] == 'no'){
                $items = $this->app['Item_db']->take( $this->app['number_of_items_to_show'] );
            }

            foreach ($items as $item)
            {
                //single item url to be show on site map
                $sitemap->addItem('/s/' .$item->id.'/'.$item['seoName'], $this->itemSitemapPriority(),
                    $this->itemSitemapFrequency(), 'Today');
            }

            $pages = $this->app['page_db']->getAll();
            foreach ( $pages as $page )
            {
                $sitemap->addItem('/p/' .$page['slug'], $this->pageSitemapPriority(),
                    $this->pageSitemapFrequency(), 'Today');
            }

            $sitemap->createSitemapIndex( $this->app['url_generator']->generate('home').'/app/storage/sitemap/', 'Today');

            $this->app['doo-csrf']->setFlashMessage( 'siteMapGenerated', ['content'=> 'Sitemap generated.'] );
            return $this->app->redirect($this->app['url_generator']->generate('siteMap'));
        }
        return '';

    }


    /**
     * Add Site Map Settings
     * @return string|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addSettings()
    {
        if( $this->app['doo-csrf']->checkCsrf() )
        {
            $this->app['site-map-form']->validator($_POST);

            $check = $this->app['site_map_db']->where('id', 1);
            $this->app['site_map_db']->createOrUpdateById( $check, 'Item Sitemap Settings ', [
                'id'=> 1,
                'priority' => $this->app['request']->get('item_priority'),
                'freqency' => $this->app['request']->get('item_frequency') ]);

            $check = $this->app['site_map_db']->where('id', 2);
            $this->app['site_map_db']->createOrUpdateById( $check, 'Page Sitemap Settings ', [
                'id' => 2,'priority' => $this->app['request']->get('page_priority'),
                'freqency' => $this->app['request']->get('page_frequency') ]);

            $this->app['doo-csrf']->setFlashMessage( 'siteMapUpdated', ['content'=> 'Site Map updated.'] );
            return $this->app->redirect($this->app['url_generator']->generate('siteMap'));
        }
        return '';
    }

    /**
     * @return mixed
     */
    private function itemSitemapPriority()
    {
        $result   = $this->app['site_map_db']->whereFirst('id',1);
        return $result['priority'];
    }

    /**
     * @return mixed
     */
    private function itemSitemapFrequency()
    {
        $result   = $this->app['site_map_db']->whereFirst('id',1);
        return $result['freqency'];
    }

    /**
     * @return mixed
     */
    private function pageSitemapPriority()
    {
        $result   = $this->app['site_map_db']->whereFirst('id',2);
        return $result['priority'];
    }

    /**
     * @return mixed
     */
    private function pageSitemapFrequency()
    {
        $result   = $this->app['site_map_db']->whereFirst('id',2);
        return $result['freqency'];
    }



}
