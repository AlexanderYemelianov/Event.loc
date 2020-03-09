<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\AppConfig;

class ComposerServiceProvider extends ServiceProvider
{
    private $getAppConfigCollection;

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layout', function ($view) {
            $view->with('phone', $this->getAppConfig('contact_phone'))
                ->with('contactName', $this->getAppConfig('contact_person_name'))
                ->with('contactEmail', $this->getAppConfig('contact_email'))
                ->with('fbLink', $this->getAppConfig('fb_link'))
                ->with('igLink', $this->getAppConfig('ig_link'));
        });

        View::composer('pages.contacts', function ($view) {
            $view->with('phone', $this->getAppConfig('contact_phone'))
                ->with('contactName', $this->getAppConfig('contact_person_name'))
                ->with('contactEmail', $this->getAppConfig('contact_email'))
                ->with('address', $this->getAppConfig('address'))
                ->with('googleMapLink', $this->getAppConfig('google_map_link'));
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function getAppConfig($appConfig)
    {
        if ($this->getAppConfigCollection === null) {
            $this->getAppConfigCollection = AppConfig::all();
        }

        return $this->getAppConfigCollection->find($appConfig)->value;
    }
}