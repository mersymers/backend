<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarouselItemsModel;
use App\Http\Requests\CarouselItemsRequest;


class CarouselItems extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CarouselItemsModel::all();
        
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(CarouselItemsRequest $request)
    {
        $validated = $request->validated();
 
        $carouselItem = CarouselItemsModel::create($validated);
         
        Return $carouselItem;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return CarouselItemsModel::findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(CarouselItemsRequest $request, string $id)
    {
        $validated = $request->validated();

        $carouselItem = CarouselItemsModel::findOrFail($id);

        $carouselItem->update($validated);

        return $carouselItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carouselItem = CarouselItemsModel::findOrFail($id);
        $carouselItem->delete();
        return carouselItem;
    }
}
