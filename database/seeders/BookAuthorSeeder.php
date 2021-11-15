<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\BookAuthor;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = Book::all()->toArray();
        // $authors = Author::all()->toArray();
        for ($i = 0; $i < count($books); $i++) {
            $bookAuthor = new BookAuthor;
            $bookAuthor->book_id = $books[$i]['id'];
            $bookAuthor->author_id = Author::all()->random()->id;
            $bookAuthor->save();
        }
    }
}
