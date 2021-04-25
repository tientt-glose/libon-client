<?php

namespace App\Http\Controllers;

use App\Libraries\LibOnApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function __construct()
    {
        $this->libonApi = new LibOnApi();
    }

    public function borrowBook(Request $request)
    {
        $params = $request->only('name', 'card_id', 'phone_number', 'book_id');
        $validatorArray = [
            'name' => 'required',
            'card_id'  => 'required',
            'phone_number' => 'required'
        ];
        $messages = [
            'name.required' => 'Bạn chưa nhập tên',
            'card_id.required'  => 'Bạn chưa nhập mã số định danh',
            'phone_number.required' => 'Bạn chưa nhập số điện thoại'
        ];
        $validator = Validator::make($params, $validatorArray, $messages);
        if ($validator->fails()) {
            //todo: hien message loi kieu gi
            return redirect()->back()->withInput()->withErrors($validator->errors()->all());
        }

        $userInfo = trim($params['name']) . '_' . trim($params['card_id']) . '_' . trim($params['phone_number']);

        $sendData = [
            'user_info' => $userInfo,
            'book_id' => $params['book_id']
        ];

        $result = $this->libonApi->createBorrowOrder($sendData);

        if (!empty($result->success)) {
            return redirect(route('book.detail', ['id' => $params['book_id']]));
        } else {
            return redirect('/');
        }
    }
}
