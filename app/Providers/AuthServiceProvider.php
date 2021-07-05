<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

        Gate::define('is-admin', function(User $user){
            return $user->isAdmin();
        });
        Gate::define('is-comptable', function(User $user){
            return $user->isComptable();
        });
        Gate::define('is-secretaire', function(User $user){
            return $user->isSecretaire();
        });
        Gate::define('is-default', function(User $user){
            return $user->isDefault();
        });
        Gate::define('is-membre', function(User $user){
            return $user->isMembre();
        });
        


    }
}
