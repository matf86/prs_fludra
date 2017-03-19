<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Recaptcha\Recaptcha;
use GuzzleHttp\Client;

class RecaptchaServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Recaptcha::class, function ($app) {
            return new Recaptcha(new Client([
                'base_uri' => 'https://google.com/recaptcha/api/',
                'timeout' => 2.0
                ]));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Recaptcha::class];
    }

}
