<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderToProductController;
use App\Http\Controllers\OrderToUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth:sanctum'], function() {
    Route::apiResource('users', UserController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('subcategories', SubcategoryController::class);
    Route::apiResource('orders', OrderController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('orderToProducts', OrderToProductController::class);
    Route::apiResource('orderToUsers', OrderToUserController::class);
});


Route::get('login', function (AuthRequest $request) {
    if (Auth::attempt($request->all())){

        $user = Auth::user();
        if (count(Auth::user()->tokens) != 0) {
            $user->tokens()->delete();
        }
        return ['token' => $user->createToken('exampleToken')->plainTextToken];

    }
});

Route::post('register', function (StoreUserRequest $request) {
    return new UserResource(User::create($request->all()));
});
