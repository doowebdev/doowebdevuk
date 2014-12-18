<?php namespace Doowebdev\Core\Admin;



use Doowebdev\Core\Base\Admin;

/**
 * Class SocialKeyController
 * @package Doowebdev\Core\Admin
 */
class SocialKeyController extends Admin{


    /**
     * @return mixed
     */
    public function show()
    {
        $this->data['socialKeyMsg'] = $this->app['doo-csrf']->getFlashMessage( 'socialKey',[] );

        return   $this->app['twig']->render(
            'admin/setting/social_keys.twig',
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
            $this->app['social-key-form']->validator($_POST);

            $check = $this->app['social_key_db']->where('id', 1);
            $this->app['social_key_db']->createOrUpdateById( $check, 'Social Media Key ', [
                'id'                  => 1,
                'facebook_public_key' => $this->app['request']->get('facebook_app_id'),
                'facebook_secret_key' => $this->app['request']->get('facebook_secret_key'),
                'twitter_public_key'  => $this->app['request']->get('twitter_app_id'),
                'twitter_secret_key'  => $this->app['request']->get('twitter_secret_key')
            ]);

            $this->app['doo-csrf']->setFlashMessage( 'socialKey', ['content'=> 'Social Media API Keys updated.'] );
            return $this->app->redirect($this->app['url_generator']->generate('socialKey'));
        }

        return '';
    }


}
