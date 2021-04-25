<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Libraries\LibOnApi;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->libonApi = new LibOnApi();
    }

    public function index()
    {
        $data = $this->libonApi->getProductAll();
        $books = $data->result->book;
        return view('home.index', compact('books'));
    }
}
