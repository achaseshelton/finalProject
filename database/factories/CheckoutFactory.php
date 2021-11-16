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
        $book = Book::all()->random();
        $book->checked_out = true;
        $book->save();
        // find the books where the id is equal to the book_id and then change the value of checked_out to true.
        // $time = Carbon::now();
        return [
            'user_id' => User::all()->random()->id,
            'book_id' => $book->id,
            'date_checked_out' => Carbon::now(),
            'due_date' => Carbon::now()->addDays(14),
        ];
    }
}
