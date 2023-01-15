<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Favorite;
use App\Policies\FavoritePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
//         'App\Models\Model' => 'App\Policies\ModelPolicy',
            Favorite::class => FavoritePolicy::class,
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
