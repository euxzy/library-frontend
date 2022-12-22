<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $res = HttpClient::fetch(
            'GET',
            'http://127.0.0.1:8000/api/book'
        );

        $books = $res['data'];
        return view('book.index', ['books' => $books]);
    }

    public function show($id)
    {
        $res = HttpClient::fetch(
            'GET',
            'http://127.0.0.1:8000/api/book/' . $id
        );

        $book = $res['data'];
        return view('book.detail', ['book' => $book]);
    }
}
