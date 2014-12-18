<?php namespace Doowebdev\Core\Admin;


use Doowebdev\Core\Base\Admin;
use Doowebdev\Core\Upload\UploadException;

/**
 * Class UploadLogoController
 * @package Doowebdev\Core\Admin
 */
class UploadLogoController extends  Admin{

    /**
     * @var
     */
    protected $logoUpload ;


    /**
     * @return mixed
     */
    public function show()
    {
        $this->data['uploadLogoMsg'] = $this->app['doo-csrf']->getFlashMessage( 'uploadLogo',[] );

        return   $this->app['twig']->render(
            'admin/setting/upload_logo.twig',
            $this->data
        );
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public  function upload()
    {
        $result = [];
        try{

            $this->app['upload.folder']= 'logo';
            $this->app['doo-upload']->upload();

            $filename =  $this->app['doo-upload']->getFilename('file_logo');
            $result = $this->app['doo-upload']->getMessages();

            $check = $this->app['logo_db']->where('id', 1);
            $this->app['logo_db']->createOrUpdateById( $check, 'Logo', [
                'id'=> 1,
                'file_name' => $filename ]);

        }catch(UploadException $e){
            $result[] = $e->getMessage();
        }
        foreach( $result as $message )
        {
            $this->app['doo-csrf']->setFlashMessage( 'uploadLogo', ['content'=> $message] );
        }
        return $this->app->redirect($this->app['url_generator']->generate('uploadLogo'));
    }


}