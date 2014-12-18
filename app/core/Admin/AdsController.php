<?php namespace Doowebdev\Core\Admin;



use Doowebdev\Core\Base\Admin;

/**
 * Class AdsController
 * @package Doowebdev\Core\Admin
 */
class AdsController extends Admin {


    /**
     * @return mixed
     */
    public function show()
    {
        $this->data['adsMsg'] = $this->app['doo-csrf']->getFlashMessage( 'Ads',[] );

        return   $this->app['twig']->render(
            'admin/setting/ads.twig',
            $this->data
        );
    }

    /**
     * @return string|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function update()
    {
        if( $this->app['doo-csrf']->checkCsrf() )
        {
            $check = $this->app['advertisement_db']->where('id', 1);
            $this->app['advertisement_db']->createOrUpdateById( $check, 'Top Ads', ['id'=> 1,
               'top_ad'      => $this->app['request']->get('top_ad'),
               'bottom_ad'   => $this->app['request']->get('bottom_ad'),
               'side_ad'     => $this->app['request']->get('side_ad'),
               //'side_box_ad' => Input::post('box_ad'),
               'top_ad_logo' => $this->app['request']->get('top_ad_logo')
            ]);

            $this->app['doo-csrf']->setFlashMessage( 'Ads', ['content'=> 'Ad spaces have been updated!'] );
            return $this->app->redirect($this->app['url_generator']->generate('adBoxes'));
        }

        return '';
    }



}
