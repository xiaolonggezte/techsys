<?php

namespace App\Providers;

use App\Facades\StudentService;
use App\Facades\TeacherService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /**
         * 判断账户是否存在
         */
        Validator::extend('account_exists', function ($attributes, $value, $parameters) {
            $_SESSION['username'] = $value;
            return StudentService::exits($value) || TeacherService::exits($value);
        });
        /**
         * 核对密码，直接返回在login页面中
         */
        Validator::extend('password_check', function ($attributes, $value, $parameters) {
            return StudentService::login($_SESSION['username'], $value) ||
                TeacherService::login($_SESSION['username'], $value);
        });
    }
}
