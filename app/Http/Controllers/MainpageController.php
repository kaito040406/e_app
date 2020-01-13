<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class MainpageController extends Controller
{
    //
    public function index(){
        $books_all = Book::where("page", 1)->orderBy('book_id', 'desc');
        $book = $books_all->paginate(10);
        $params = [
            'book' => $book
        ];

        return view('books.index', $params);
    }

    public function show($id){

    }
}
