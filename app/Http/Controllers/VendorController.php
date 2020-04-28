<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class VendorController extends Controller
{
    public function index(){
        $vendor = Vendor::all();
        return response()->json([
            'msg' => 'success',
            'vendor' => $vendor
        ]),20);
    }

    public function search($vendor){
        $vendor = Vendor::where('nama_vendor','like',"%{$nama_vendor}"->get());
        return response()->json([
            'vendor' => $vendor;
        ]);
    }
}
