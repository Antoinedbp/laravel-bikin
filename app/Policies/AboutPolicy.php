<?php

namespace App\Policies;

use App\Models\DeuxiemeSection;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, DeuxiemeSection $deuxiemeSection)
    {
        return in_array($user->role_id, [2, 3]);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array($user->role_id, [2, 3]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, DeuxiemeSection $deuxiemeSection)
    {
        return in_array($user->role_id, [2, 3]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, DeuxiemeSection $deuxiemeSection)
    {
        return in_array($user->role_id, [2, 3]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, DeuxiemeSection $deuxiemeSection)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, DeuxiemeSection $deuxiemeSection)
    {
        //
    }
}
