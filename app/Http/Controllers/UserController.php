<?php

namespace App\Http\Controllers;

use App\Filters\UserFilter;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $filter = new UserFilter();
        $query = $filter->transform($request);

        if (count($query) == 0) {
            if (Auth::user()->account_type == 'I' || Auth::user()->account_type == 'B') {
                return new UserResource(Auth::user());
            }
            return new UserCollection(User::paginate(10));
        } else {

            if (Auth::user()->account_type == 'I' || Auth::user()->account_type == 'B') {
                return new UserResource(Auth::User());
            }
            return new UserCollection(User::where($query)->paginate(10));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        return new UserResource(User::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        if ( Auth::user()->account_type == 'A' || Auth::user()->account_type=='W') return new UserResource($user);
        else return new UserResource(Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
       if (Auth::user()->account_type == 'A' || Auth::user()->account_type == 'W' || Auth::user()->id == $user->id) {
        $user->update($request->all());
        return response()->json(["message", "User updated"], 200);
       }
       return response()->json(["message", "Authentication Required!"], 401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->destroy($user->id);
    }
}
