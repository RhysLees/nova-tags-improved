<?php

namespace Rhyslees\NovaTagsImproved;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;
use RhysLees\NovaAbout\NovaAbout;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('tag', __DIR__.'/../dist/js/field.js');
            Nova::style('tag', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        NovaAbout::addPackage('rhyslees/nova-tags-improved');
    }
}