<?php


namespace App\TakeOff\Provider;


use Illuminate\Support\ServiceProvider;

class ApiServiceProviders extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\TakeOff\Api\JobApiInterface',
            'App\TakeOff\Api\JobApiRepository');
    }
}
