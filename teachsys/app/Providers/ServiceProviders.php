<?php
/**
 * Service的工厂类
 */
namespace App\Providers;


use App\Services\StudentService;
use App\Services\TeacherService;
use Illuminate\Support\ServiceProvider;

class ServiceProviders extends ServiceProvider
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
        $this->app->singleton('StudentService', function () {
            return new StudentService;
        });

        $this->app->singleton('TeacherService', function () {
            return new TeacherService;
        });
    }
}
