<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomerModel;

class CustomerController extends Controller
{
    public function index()
    {
        $data = CustomerModel::all();
        return response($data);
    }

    public function show($id)
    {
        $data = CustomerModel::where('nama', $id)->get();
        return response($data);
    }

    public function store(Request $request)
    {
        $data = new CustomerModel();
        $data->nama = $request->input('nama');
        $data->email = $request->input('email');
        $data->password = $request->input('password');
        $status = $data->save();

        if($status){
            return response()->json([
                'infoStore' => [
                    'status' => $status,
                    'message' => 'Data Berhasil Ditambahkan!'
                ]
            ]);
        }
        
    }

    public function update(Request $request, $id)
    {
        $data = CustomerModel::where('id', $id)->first();
        $data->nama = $request->input('nama');
        $data->email = $request->input('email');
        $data->password = $request->input('password');
        $status = $data->save();

        if ($status) {
            return response()->json([
                'infoStore' => [
                    'status' => $status,
                    'message' => 'Data Berhasil Diubah!'
                ]
            ]);
        }
    }
}