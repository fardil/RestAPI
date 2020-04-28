<?php

namespace App\Http\Controllers;

use App\quantitySizeModel;

class quantitySizeController extends Controller
{
    public function index(){
        $data = quantitySizeModel::all();
        return response($data);
    }
    public function show($id_baju){
        $data = quantitySizeModel::where('id_baju',$id_baju)->get();
        return response ($data);
    }
    public function store (Request $request){
        $data = new quantitySizeModel();
        $data->quantity_s = $request->input('quantity_s');
        $data->quantity_m = $request->input('quantity_m');
        $data->quantity_l = $request->input('quantity_l');
        $data->quantity_xl = $request->input('quantity_xl');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }
}