<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // Event => Listener
    ];

    public function boot()
    {
        //
    }
}