<?php

namespace App\Http\Controllers;

use App\Transactions;

class quantitySizeController extends Controller
{
    public function index(){
        $data = Transactions::all();
        return response($data);
    }
    public function show($id_baju){
        $data = Transactions::where('id_transaction',$id_transaction)->get();
        return response ($data);
    }
    public function store (Request $request){
        $data = new Transactions();
        $data->quantity_s = $request->input('quantity_s');
        $data->quantity_m = $request->input('quantity_m');
        $data->quantity_l = $request->input('quantity_l');
        $data->quantity_xl = $request->input('quantity_xl');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }
}