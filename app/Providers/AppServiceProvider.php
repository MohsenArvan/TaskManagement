<?php

namespace App\Providers;

use App\Repositories\Board\BoardInterface;
use App\Repositories\Board\BoardRepository;
use App\Services\BoardServiceInterface;
use Illuminate\Auth\Notifications\ResetPassword;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\ServiceProvider;
use App\Services\BoardServices;
use App\Services\Task\TaskServiceInterface;
use App\Services\Task\TaskServices;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BoardServiceInterface::class, function($app){
            return new BoardServices();
        });

        $this->app->bind(BoardInterface::class, function(){
            return new BoardRepository();
        });

        $this->app->bind(TaskServiceInterface::class, function($app){
            return new TaskServices();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);

        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
    }
}
