<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Validation\Rules\Unique;

class CheckoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $time = Carbon::now();
        return [
            'user_id' => User::all()->random()->id,
            'book_id' => Book::all()->random()->id,
            'date_checked_out' => Carbon::now(),
            'due_date' => Carbon::now()->addDays(14),
        ];
    }
}
