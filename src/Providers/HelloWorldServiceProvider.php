<?php

namespace HelloWorld\\Providers\\HelloWorldServiceProvider


use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {

    }
}

public function register()
        {
            $this->getApplication()->register(HelloWorldRouteServiceProvider::class);
        }

#HelloWorld\\Providers\\HelloWorldServiceProvider
#HelloWorld\Providers;
