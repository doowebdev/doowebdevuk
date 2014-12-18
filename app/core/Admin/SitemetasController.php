<?php namespace Doowebdev\Core\Admin;




use Doowebdev\Core\Base\Admin;

/**
 * Class SitemetasController
 * @package Doowebdev\Core\Admin
 */
class SitemetasController extends Admin{


    /**
     * @return mixed
     */
    public function show()//was site details
    {
        $this->data['siteMetasMsg'] = $this->app['doo-csrf']->getFlashMessage( 'siteMetas',[] );

        return   $this->app['twig']->render(
            'admin/setting/site-details.twig',
            $this->data
        );
    }

    /**
     * Get site details
     * @param  $data = $_POST
     * @return string and int
     */
    public function update()
    {
        if( $this->app['doo-csrf']->checkCsrf() )
        {
            $this->app['settings-metas-form']->validator($_POST);

            $check = $this->app['site_meta_db']->where('id', $this->app['request']->get('id'));
            $this->app['site_meta_db']->createOrUpdateById( $check, 'Site Meta Details ', [
                'id'          => $this->app['request']->get('id'),
                'title'       => $this->app['request']->get('site_meta_title'),
                'description' => $this->app['request']->get('site_meta_description'),
                'keywords'	  => $this->app['request']->get('site_meta_keywords')
                ]);

            $this->app['doo-csrf']->setFlashMessage( 'siteMetas', ['content'=> 'Site Metas updated!'] );
            return $this->app->redirect($this->app['url_generator']->generate('siteMetas'));
        }

        return '';
    }


}
