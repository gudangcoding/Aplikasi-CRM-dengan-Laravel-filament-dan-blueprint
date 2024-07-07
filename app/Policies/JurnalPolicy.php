<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Jurnal;
use Illuminate\Auth\Access\HandlesAuthorization;

class JurnalPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_jurnals');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jurnal $jurnal): bool
    {
        return $user->can('view_jurnals');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_jurnals');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jurnal $jurnal): bool
    {
        return $user->can('update_jurnals');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jurnal $jurnal): bool
    {
        return $user->can('delete_jurnals');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_jurnals');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Jurnal $jurnal): bool
    {
        return $user->can('force_delete_jurnals');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_jurnals');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Jurnal $jurnal): bool
    {
        return $user->can('restore_jurnals');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_jurnals');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Jurnal $jurnal): bool
    {
        return $user->can('replicate_jurnals');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_jurnals');
    }
}
