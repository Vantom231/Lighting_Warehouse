<?php

namespace App\Policies;

use App\Models\OrderToUser;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class OrderToUserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, OrderToUser $orderToUser): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, OrderToUser $orderToUser): bool
    {
        return Auth::user()->account_type == 'A' || Auth::user()->account_type == 'W';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, OrderToUser $orderToUser): bool
    {
        return Auth::user()->account_type == 'A' || Auth::user()->account_type == 'W';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, OrderToUser $orderToUser): bool
    {
        return Auth::user()->account_type == 'A' || Auth::user()->account_type == 'W';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, OrderToUser $orderToUser): bool
    {
        return Auth::user()->account_type == 'A' || Auth::user()->account_type == 'W';
    }
}
