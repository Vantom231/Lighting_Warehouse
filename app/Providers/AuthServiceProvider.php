<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderToProduct;
use App\Models\OrderToUser;
use App\Models\Product;
use App\Models\Subcategory;
use App\Policies\CategoryPolicy;
use App\Policies\OrderPolicy;
use App\Policies\OrderToProductPolicy;
use App\Policies\OrderToUserPolicy;
use App\Policies\ProductPolicy;
use App\Policies\SubcategoryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Category::class => CategoryPolicy::class,
        Order::class => OrderPolicy::class,
        OrderToProduct::class => OrderToProductPolicy::class,
        OrderToUser::class => OrderToUserPolicy::class,
        Product::class => ProductPolicy::class,
        Subcategory::class => SubcategoryPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
