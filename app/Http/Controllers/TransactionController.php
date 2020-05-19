<?php

namespace App\Http\Controllers;

use App\TransactionModel;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        $data = TransactionModel::all();
        return response($data);
    }
    public function show($id_transaction){
        $data = TransactionModel::where('id_transaction',$id_transaction)->get();
        return response ($data);
    }
    public function store (Request $request){
        $data = new TransactionModel();
        $data->update_pesanan = $request->input('update_pesanan');
        $data->quantity_s = $request->input('quantity_s');
        $data->quantity_m = $request->input('quantity_m');
        $data->quantity_l = $request->input('quantity_l');
        $data->quantity_xl = $request->input('quantity_xl');
        $data->quantity_xxl = $request->input('quantity_xxl');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }
}