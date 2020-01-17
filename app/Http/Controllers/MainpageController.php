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
        $books = $books_all->paginate(10);
        $params = [
            'books' => $books
        ];
        return view('books.index', $params);
    }

    public function show($id){
        $book = Book::find($id);
        $search_no = $book->book_id;
        $selects_book = Book::where("book_id", $search_no)->get();
        $params = [
            'books' => $selects_book,
            'title' => $book
        ];
        return view('books.show', $params);
    }
}
