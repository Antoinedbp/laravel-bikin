<?php

namespace App\Policies;

use App\Models\Navbar;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HeaderPolicy
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
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Navbar $navbar)
    {
        return in_array($user->role_id, [1, 2]);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array($user->role_id, [1, 2]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Navbar $navbar)
    {
        return in_array($user->role_id, [1, 2]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Navbar $navbar)
    {
        return in_array($user->role_id, [1, 2]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Navbar $navbar)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Navbar $navbar)
    {
        //
    }
}
