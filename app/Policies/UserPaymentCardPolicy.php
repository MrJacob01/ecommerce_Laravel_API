<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserPaymentCard;
use Illuminate\Auth\Access\Response;

class UserPaymentCardPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UserPaymentCard $userPaymentCard): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UserPaymentCard $userPaymentCard): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UserPaymentCard $userPaymentCard): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, UserPaymentCard $userPaymentCard): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, UserPaymentCard $userPaymentCard): bool
    {
        return false;
    }
}
