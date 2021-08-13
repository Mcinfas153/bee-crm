<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Utype;
use App\Policies\LeadPolicy;
use App\Policies\UserPolicy;
use App\Policies\UtypesPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class,
        Lead::class => LeadPolicy::class,
        Utype::class => UtypesPolicy::class
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
    }
}
