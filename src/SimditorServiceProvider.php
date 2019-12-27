<?php

namespace Jcbt\Simditor;

use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;
use Jcbt\Simditor\Src\EditorField;

class SimditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Simditor $extension)
    {
        if (! Simditor::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'simditor');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/jcbt/simditor')],
                'simditor'
            );
        }

        $this->app->booted(function () {
            Form::extend('simditor', EditorField::class);
        });
    }
}
