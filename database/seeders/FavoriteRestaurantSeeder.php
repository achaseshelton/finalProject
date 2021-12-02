<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\FavoriteRestaurant;

class FavoriteRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all()->toArray();
        // $authors = Author::all()->toArray();
        for ($i = 0; $i < count($users); $i++) {
            $favoriteRestaurant = new FavoriteRestaurant;
            $favoriteRestaurant->user_id = $users[$i]['id'];
            $favoriteRestaurant->restaurant_id = Restaurant::all()->random()->id;
            $favoriteRestaurant->save();
        }
    }
}
