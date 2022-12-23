<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function create()
    {
        return view('book.add');
    }

    public function store(Request $request)
    {
        $files = [];
        if ($request->hasFile('photo')) {
            $files['photo'] = $request->file('photo');
        }

        HttpClient::fetch(
            'POST',
            'http://127.0.0.1:8000/api/book/create',
            $request->all(),
            $files
        );

        return redirect()->back();
    }

    public function edit($id)
    {
        $res = HttpClient::fetch(
            'GET',
            'http://127.0.0.1:8000/api/book/' . $id
        );

        $book = $res['data'];
        return view('book.edit', ['book' => $book]);
    }
}
