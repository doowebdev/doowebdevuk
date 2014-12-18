<?php namespace Doowebdev\Core\Admin;



use Doowebdev\Core\Base\Admin;

/**
 * Class SocialUsernameController
 * @package Doowebdev\Core\Admin
 */
class SocialUsernameController extends Admin{


    /**
     * @return mixed
     */
    public function show()
    {
        $this->data['socialUsernameMsg'] = $this->app['doo-csrf']->getFlashMessage( 'socialUsername',[] );

        return $this->app['twig']->render(
            'admin/setting/social.twig',
            $this->data
        );
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function update()
    {
        if( $this->app['doo-csrf']->checkCsrf() )
        {
            $check = $this->app['social_username_db']->where('id', 1);
            $this->app['social_username_db']->createOrUpdateById( $check, 'Side Media Usernames ', [
                'id'            => 1,
                'facebook_user' => $this->app['request']->get('facebook_user'),
                'twitter_user'  => $this->app['request']->get('twitter_user')
            ]);

            $this->app['doo-csrf']->setFlashMessage( 'socialUsername', ['content'=> 'Social Media Usernames updated.'] );
            return $this->app->redirect($this->app['url_generator']->generate('socialUsername'));
        }
        return '';
    }

} 