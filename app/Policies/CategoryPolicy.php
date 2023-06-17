<?php

namespace App\Policies;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class CategoryPolicy
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
    public function view(User $user, Category $category): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(StoreCategoryRequest $request): bool
    {
        return Auth::user()->account_type == 'A';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UpdateCategoryRequest $request, Category $category): bool
    {
        return Auth::user()->account_type == 'A';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Category $category): bool
    {
        return Auth::user()->account_type == 'A';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Category $category): bool
    {
        return Auth::user()->account_type == 'A';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Category $category): bool
    {
        return Auth::user()->account_type == 'A';
    }
}
