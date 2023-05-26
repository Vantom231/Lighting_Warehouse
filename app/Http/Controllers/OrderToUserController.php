<?php

namespace App\Http\Controllers;

use App\Models\OrderToUser;
use App\Http\Requests\StoreOrderToUserRequest;
use App\Http\Requests\UpdateOrderToUserRequest;
use App\Http\Resources\OrderToUserCollection;
use App\Http\Resources\OrderToUserResource;

class OrderToUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new OrderToUserCollection(OrderToUser::paginate(15));
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
    public function store(StoreOrderToUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderToUser $orderToUser)
    {
        return new OrderToUserResource($orderToUser);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderToUser $orderToUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderToUserRequest $request, OrderToUser $orderToUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderToUser $orderToUser)
    {
        //
    }
}
