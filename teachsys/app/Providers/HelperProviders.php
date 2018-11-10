<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-6 下午7:50
 * Description:
 */

namespace App\Providers;



use App\helpers\StringHelper;
use Illuminate\Support\ServiceProvider;

class HelperProviders extends ServiceProvider
{
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
        $this->app->singleton('StringHelper', function() {
            return new StringHelper;
        });
    }
}