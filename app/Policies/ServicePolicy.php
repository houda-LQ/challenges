<?php

namespace App\Policies;

use App\Models\Service;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ServicePolicy
{
   use HandlesAuthorization;

   
    public function before(User $user, $ability)
    {
       
        if ($user->is_admin) {
            return true; 
        }
    }

    /**
     * Determine whether the user can view the model.
     */
     public function view(User $user, Service $service)
    {
        
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
      public function create(User $user)
    {
        // Exemple : tout utilisateur connecté peut créer un service
        return $user !== null;
    }
    /**
     * Determine whether the user can update the model.
     */
     public function update(User $user, Service $service)
    {
        return $user->id === $service->user_id;
    }
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Service $service)
    {
        // Seul le propriétaire peut supprimer
        return $user->id === $service->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    

    /**
     * Determine whether the user can permanently delete the model.
     */
    
}
