<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Job;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Gate $gate): void
    {
         if (DB::getDriverName() === 'sqlite') {
        DB::statement('PRAGMA foreign_keys=ON;');
        }

        Model::preventLazyLoading();
        //Paginator::useBootstrapFive();


        // $gate->define('edit-job', function(User $user, Job $job) {
        //     return $job->employer->user->is($user);
        // });
    }
}
