<?php

$app['translator'] = $app->share( $app->extend('translator',

    /**
     * @param $translator
     * @param $app
     * @return mixed
     */
    function( $translator, $app ) {

        $translator->addLoader('php', new \Symfony\Component\Translation\Loader\PhpFileLoader());

        if( is_dir( __DIR__.'/../../locales/'.$app['language']) )
        {
            $translator->addResource('php', __DIR__.'/../../locales/'.$app['language'].'/localization.php', $app['language'] );
        }else{
            $translator->addResource('php', __DIR__.'/../../locales/en/localization.php', 'en' );
        }

        return $translator;
}));





