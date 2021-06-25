<?php

namespace App\Policies;

use App\Level;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LevelPolicy
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
     * @param  \App\Level  $level
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess('level_list');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess('level_add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Level  $level
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess('level_edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Level  $level
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->checkPermissionAccess('level_delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Level  $level
     * @return mixed
     */
    public function restore(User $user, Level $level)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Level  $level
     * @return mixed
     */
    public function forceDelete(User $user, Level $level)
    {
        //
    }
}
