<?php

namespace App\Http\Controllers;

use App\Filters\OrderToProductFilter;
use App\Models\OrderToProduct;
use App\Http\Requests\StoreOrderToProductRequest;
use App\Http\Requests\UpdateOrderToProductRequest;
use App\Http\Resources\OrderToProductCollection;
use App\Http\Resources\OrderToProductResource;
use Illuminate\Http\Request;

class OrderToProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new OrderToProductFilter();
        $query = $filter->transform($request);

        if (count($query) == 0) {
            return new OrderToProductCollection(OrderToProduct::paginate(15));
        } else {
            return new OrderToProductCollection(OrderToProduct::where($query)->paginate(15));
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
    public function store(StoreOrderToProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderToProduct $orderToProduct)
    {
        return new OrderToProductResource($orderToProduct);
        // return $orderToProduct;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderToProduct $orderToProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderToProductRequest $request, OrderToProduct $orderToProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderToProduct $orderToProduct)
    {
        //
    }
}
