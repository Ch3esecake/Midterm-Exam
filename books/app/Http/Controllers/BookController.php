<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        // Simple list of books
        $books = [
            ['title' => '1984', 'author' => 'George Orwell', 'year' => 1949, 'description' => 'A dystopian novel set in a totalitarian regime under the watchful eye of Big Brother.'],
            ['title' => 'Brave New World', 'author' => 'Aldous Huxley', 'year' => 1932, 'description' => 'A vision of a future society where people are controlled through technology, pleasure, and conditioning.'],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'year' => 1925, 'description' => 'A story of the mysterious Jay Gatsby and his obsession with the love of his life, Daisy Buchanan, in the roaring twenties.'],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'year' => 1960, 'description' => 'A novel about racial injustice and the moral growth of Scout Finch in the Deep South during the 1930s.'],
            ['title' => 'Moby Dick', 'author' => 'Herman Melville', 'year' => 1851, 'description' => 'The story of Ishmael, a sailor who joins the whaling ship Pequod, led by the obsessive Captain Ahab, seeking revenge on the great white whale.'],
        ];
    

        // Pass books to the view
        return view('welcome', ['books' => $books]);
    }
}
