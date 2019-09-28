<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAll(Request $request)
    {
        return response()->json([
            'data' => [
                'hello' => 'worlds',
                'iam' => 'hereeeeeeeee'
            ]
        ]);
    }
    //
}
