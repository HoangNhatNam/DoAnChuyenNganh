<?php

namespace App\Policies;

use App\Regent;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RegentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Regent  $regent
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess(config('permissions.access.list-regent'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess('regent_add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Regent  $regent
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess('regent_edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Regent  $regent
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->checkPermissionAccess('regent_delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Regent  $regent
     * @return mixed
     */
    public function restore(User $user, Regent $regent)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Regent  $regent
     * @return mixed
     */
    public function forceDelete(User $user, Regent $regent)
    {
        //
    }
}
