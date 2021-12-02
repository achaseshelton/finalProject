<?php

namespace App\Http\Controllers;

use App\Models\FavoriteRestaurant;
use Illuminate\Http\Request;

class FavoriteRestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = $request->user();
        $favorite = new FavoriteRestaurant;
        $favorite->user_id = $user->id;
        $favorite->restaurant_id = $request->restaurant_id;
        $favorite->save();
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
     * @param  \App\Models\FavoriteRestaurant  $favoriteRestaurants
     * @return \Illuminate\Http\Response
     */
    public function show(FavoriteRestaurant $favoriteRestaurants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FavoriteRestaurant  $favoriteRestaurants
     * @return \Illuminate\Http\Response
     */
    public function edit(FavoriteRestaurant $favoriteRestaurants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FavoriteRestaurants  $favoriteRestaurants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FavoriteRestaurant $favoriteRestaurants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FavoriteRestaurants  $favoriteRestaurants
     * @return \Illuminate\Http\Response
     */
    public function destroy(FavoriteRestaurant $favoriteRestaurants)
    {
        //
    }
}
