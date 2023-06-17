<?php

use App\Filters\ProductFilter;
use App\Filters\SubcategoryFilter;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderToProductController;
use App\Http\Controllers\OrderToUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\SubcategoryCollection;
use App\Http\Resources\UserResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return new UserResource($request->user());
});

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth:sanctum'], function() {
    Route::apiResource('users', UserController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('subcategories', SubcategoryController::class);
    Route::apiResource('orders', OrderController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('orderToProducts', OrderToProductController::class);
    Route::apiResource('orderToUsers', OrderToUserController::class);
});


Route::post('login', function (AuthRequest $request) {
    if (Auth::attempt($request->all())){

        $user = Auth::user();
        if (count(Auth::user()->tokens) != 0) {
            $user->tokens()->delete();
        }
        return ['token' => $user->createToken('exampleToken')->plainTextToken];

    }
    return response()->json(['error' => 'Unauthenticated.'], 401);
});

Route::post('register', function (StoreUserRequest $request) {
    if ($request->account_type == 'I' || $request->account_type == 'B' ) {
        return new UserResource(User::create($request->all()));
    }
    return response()->json(["message"=>"Authentication Required!"], 401);
});

Route::get('categories',function () {
    return new CategoryCollection(Category::all());
});

Route::get('subcategories', function (Request $request) {
    $filter = new SubcategoryFilter();
    $query = $filter->transform($request);

    if (count($query) == 0){
        return new SubcategoryCollection(Subcategory::paginate(10));
    } else {
        return new SubcategoryCollection(Subcategory::where($query)->paginate(10));

    }
});

Route::get('products', function (Request $request) {

    $filter = new ProductFilter();
    $query = $filter->transform($request);

    if (count($query) == 0){
        return new ProductCollection(Product::paginate(10));

    }

    return new ProductCollection(Product::where($query)->paginate(10));
});

