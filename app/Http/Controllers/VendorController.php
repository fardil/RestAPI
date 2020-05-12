<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VendorModel;

class VendorController extends Controller
{
    public function index(){
        $vendors = VendorModel::all();
        return response()->json([
            'msg' => 'success',
            'vendors' => $vendors
        ]);
    }

    public function search($vendor){
        $vendors = VendorModel::where('nama_vendor','like',"%{$nama_vendor}",get());
        return response()->json([
            'vendors' => $vendors
        ]);
    }

    public function store(Request $request)
    {
        $data = new VendorModel();
        $data->nama_vendor = $request -> input('nama_vendor');
        $data->alamat_vendor = $request -> input('alamat_vendor');
        $data->no_telp_vendor = $request -> input('no_telp_vendor');
        $data->save();

        return response('Vendor is added');
    }

    public function show($id_vendor)
    {
        $data = VendorModel::where('id_vendor',$id_vendor)->get();
        return response ($data);
    }
}
