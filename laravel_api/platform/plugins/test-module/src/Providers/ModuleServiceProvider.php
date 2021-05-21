<?php

namespace TestModule\Providers;

use HMVCTools\Providers\AbstractModuleProvider;

class ModuleServiceProvider extends AbstractModuleProvider
{
    /**
     * @return string
     */
    public function getDir()
    {
        return __DIR__;
    }

    /**
     * @return string
     */
    public function getModuleName()
    {
        return 'test-module';
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->register(RouteServiceProvider::class);
    }
}
