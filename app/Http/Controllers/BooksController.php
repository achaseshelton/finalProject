<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Resources\BooksResource;
use App\Models\BookAuthor;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BooksResource::collection(Book::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = $request->user();
        // if user->role is less than 3 run this else unauthorized user
        if ($user->role_id < 3) {
        $faker = \Faker\Factory::create(1);
        $book = Book::create([
            'name' => $faker->name,
            'description' => $faker->sentence,
            'isbn' => $faker->isbn13,
            'checked_out' => false
        ]);

        return new BooksResource($book);
        } else {
            return 'user not authorized';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return new BooksResource($book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $user = $request->user();
        // if user->role is less than 3 run this else unauthorized user
        if ($user->role_id < 3) {
        $book->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'isbn' => $request->input('isbn'),
            'checked_out' => $request->input('checked_out')
        ]);

        return new BooksResource($book);
        } else {
            return 'user not authorized';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Book $book)
    {
        // find the books in the book author table wheren the book_id is equal to the $book and then delete that from the book authors table
        $authorBooks = BookAuthor::all()->where('book_id', '=', $book->id);

        // for each item in author books array
        $user = $request->user();
        // if user->role is less than 3 run this else unauthorized user
        if ($user->role_id < 3) {
        foreach ($authorBooks as $key => $authorBook) {
            $book = BookAuthor::find($authorBook['id']);
            $book->delete();
        }

        $book->delete();
        return response(null, 204);
       } else {
           return 'user not authorized';
       }
    }
}
