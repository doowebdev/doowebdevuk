<?php namespace Doowebdev\Core\Admin;



use Doowebdev\Core\Base\Admin;


/**
 * Class GeneralSettingsController
 * @package Doowebdev\Core\Admin
 */
class GeneralSettingsController extends  Admin{


    /**
     * @var
     */
    protected $settingsForm;


    /**
     * @return mixed
     */
    public function show( )
    {
        $this->data['settingsMsg'] = $this->app['doo-csrf']->getFlashMessage( 'generalSettings',[] );

        return   $this->app['twig']->render(
            'admin/setting/settings.twig',
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
            $this->app['settings-form']->validator($_POST);

            $this->app['general_setting_db']->update( 'id', $this->app['request']->get('id'), [
                'site_url'      => $this->app['request']->get('site_url'),
                'site_title'    => $this->app['request']->get('site_title'),
                'sentFromEmail' => $this->app['request']->get('sentEmailFrom'),
                'footer_text'   => $this->app['request']->get('footer_text')
            ] );

        $this->app['doo-csrf']->setFlashMessage( 'generalSettings', ['content'=> 'General settings updated!'] );
        return $this->app->redirect($this->app['url_generator']->generate('generalSettings'));

       }
        return '';
    }


}