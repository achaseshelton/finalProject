<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Resources\RestaurantsResource;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Restaurant::with(['favorites.user'])->get();
    }

    public function random()
    {
        return Restaurant::with(['favorites.user'])->get()->random(3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $search = $request->all();

        if(isset($search['cuisine']) && isset($search['price'])) {
            $restaurants = Restaurant::
            where('cuisine', $search['cuisine'])
            ->where('price', '<=', intval($search['price']))
            ->get();
            $favs = $restaurants->load('favorites.user');
            return $favs->toArray();
        }

        if(isset($search['cuisine'])) {
            $restaurants = Restaurant::
            where('cuisine', $search['cuisine'])
            ->get();
            $favs = $restaurants->load('favorites.user');
            return $favs->toArray();
        }

        if(isset($search['price'])) {
            $restaurants = Restaurant::
            where('price', $search['price'])
            ->get();
            $favs = $restaurants->load('favorites.user');
            return $favs->toArray();
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
