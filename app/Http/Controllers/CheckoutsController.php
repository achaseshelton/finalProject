<?php

namespace App\Http\Controllers;

use App\Http\Resources\CheckoutsResource;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Carbon\Carbon;

class CheckoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CheckoutsResource::collection(Checkout::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Book::all()->random();
        $book->checked_out = true;
        $book->save();
        // find the books where the id is equal to the book_id and change the value of checeked-out to true.
        $faker = \Faker\Factory::create(1);
        $checkout = Checkout::create([
            'user_id' => User::all()->random()->id,
            'book_id' => $book->id,
            'date_checked_out' => Carbon::now(),
            'due_date' => Carbon::now()->addDays(14)
        ]);

        return new CheckoutsResource($checkout);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        return new CheckoutsResource($checkout);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->update([
            'user_id' => $request->input('user_id'),
            'book_id' => $request->input('book_id'),
            'date_checked_out' => $request->input('date_checked_out'),
            'due_date' => $request->input('due_date')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        $checkout->delete();
        return response(null, 204);
    }
}
