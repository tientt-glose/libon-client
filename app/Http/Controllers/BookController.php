<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Libraries\LibOnApi;

class BookController extends Controller
{
    public function __construct()
    {
        $this->libonApi = new LibOnApi();
    }

    public function detail(Request $request)
    {
        $params = [
            'id' =>  $request->id
        ];
        $data = $this->libonApi->getBookDetail($params);
        $book = $data->result;
        return view('product.detail', compact('book'));
    }
}
