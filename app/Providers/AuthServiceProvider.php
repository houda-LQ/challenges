<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
<<<<<<< HEAD

use App\Models\Service;
use App\Policies\ServicePolicy;
use Illuminate\Auth\Access\Gate;
=======
>>>>>>> 9209f5f0e4b6c8bd491b14f6d5c1bef6c92f317c
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
<<<<<<< HEAD
         Service::class => ServicePolicy::class,
=======
>>>>>>> 9209f5f0e4b6c8bd491b14f6d5c1bef6c92f317c
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
<<<<<<< HEAD
          $this->registerPolicies();
     
   
    }
    
=======
    }
>>>>>>> 9209f5f0e4b6c8bd491b14f6d5c1bef6c92f317c
}
