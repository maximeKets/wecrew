<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function usercategory()
    {
        $user = auth()->user();
        $response =
        [

            'category' => $user->category,

        ];

        return response()->json($response);
    }
}
