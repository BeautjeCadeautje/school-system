<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
    public function boot(): void
    {
        // Role-based authorization gates
        Gate::define('isAdmin', fn (User $user) => $user->isAdmin());
        Gate::define('isTeacher', fn (User $user) => $user->isTeacher());
        Gate::define('isParent', fn (User $user) => $user->isParent());
        Gate::define('isStudent', fn (User $user) => $user->isStudent());
    }
}
