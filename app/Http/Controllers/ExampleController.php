<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
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
                'iam' => 'here'
            ] 
        ]);
    }
    //
}
