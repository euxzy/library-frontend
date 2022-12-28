<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $res = HttpClient::fetch(
            'GET',
            'http://127.0.0.1:8000/api/author'
        );

        $authors = $res['data'];
        return view('author.index', ['authors' => $authors]);
    }
}
