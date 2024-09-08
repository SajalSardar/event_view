<?php

namespace App\Policies;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool {
        if ($user->can('menu view list')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool {
        if ($user->can('menu view list')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool {
        //
        return ($user->can('create'));
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Menu $menu): bool {
        if ($user->can('update')) {
            return true;
        }

        if ($user->can('update own')) {
            return $user->id == $menu->user_id;
        }

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Menu $menu): bool {
        if ($user->can('delete')) {
            return true;
        }

        if ($user->can('delete own')) {
            return $user->id == $menu->user_id;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Menu $menu): bool {
        if ($user->can('restore')) {
            return true;
        }
        if ($user->can('restore own')) {
            return $user->id == $menu->user_id;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Menu $menu): bool {
        if ($user->can('force delete')) {
            return true;
        }
        if ($user->can('force delete own')) {
            return $user->id == $menu->user_id;
        }
    }
}
