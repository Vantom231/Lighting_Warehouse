<?php

namespace App\Http\Controllers;

use App\Filters\SubcategoryFilter;
use App\Models\Subcategory;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Http\Resources\SubcategoryCollection;
use App\Http\Resources\SubcategoryResource;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new SubcategoryFilter();
        $query = $filter->transform($request);

        if (count($query) == 0){
            return new SubcategoryCollection(Subcategory::paginate(10));
        } else {
            return new SubcategoryCollection(Subcategory::where($query)->paginate(10));

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
    public function store(StoreSubcategoryRequest $request)
    {
        return new SubcategoryResource(Subcategory::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        return new SubcategoryResource($subcategory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        $subcategory->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->destory($subcategory->id);
    }
}
