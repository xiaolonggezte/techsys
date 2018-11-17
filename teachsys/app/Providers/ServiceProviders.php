<?php
/**
 * Service的工厂类
 */
namespace App\Providers;


use App\Services\ClassService;
use App\Services\CommonService;
use App\Services\ExamPaperService;
use App\Services\ExamService;
use App\Services\MailService;
use App\Services\PracticeService;
use App\Services\ProContentCategoryService;
use App\Services\ProsService;
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

        $this->app->singleton('CommonService', function () {
            return new CommonService;
        });

        $this->app->singleton('MailService', function() {
            return new MailService;
        });

        $this->app->singleton('ClassService', function() {
            return new ClassService;
        });

        $this->app->singleton('ExamPaperService', function() {
            return new ExamPaperService;
        });

        $this->app->singleton('ExamService', function() {
            return new ExamService;
        });

        $this->app->singleton('PracticeService', function() {
            return new PracticeService;
        });

        $this->app->singleton('ProContentCategoryService', function() {
            return new ProContentCategoryService;
        });

        $this->app->singleton('ProsService', function() {
            return new ProsService;
        });
    }
}
