<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrentLocal extends Controller
{
    public function index(Request $request) {
        $data = [
            'message' => trans('messages.greeting')
        ];

        return response()->json($data, 200);
    }
}
