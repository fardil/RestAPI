<?php

namespace App\Http\Controllers;

use App\articlesModel;
use Illuminate\Http\Request;


class articlesController extends Controller
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
    public function index(){
        $data = articlesModel::all();
        return response($data);
    }
    public function show($id_artikel){
        $data = articlesModel::where('id_artikel',$id_artikel)->get();
        return response ($data);
    }
    public function store (Request $request){
        $data = new articlesModel();
        $data->judul_artikel = $request->input('judul_artikel');
        $data->tema_artikel = $request->input('tema_artikel');
        $data->isi_artikel = $request->input('isi_artikel');
        $data->save();
    
        return response('Article is successfully added.');
    }

    public function update(Request $request, $id_artikel){
        $data = articlesModel::where('id_artikel',$id_artikel)->first();
        $data->judul_artikel = $request->input('judul_artikel');
        $data->tema_artikel = $request->input('tema_artikel');
        $data->isi_artikel = $request->input('isi_artikel');
        $data->save();
    
        return response('Article is successfully changed.');
    }
    
    public function destroy($id_artikel){
        $data = articlesModel::where('id_artikel',$id_artikel)->first();
        $data->delete();
    
        return response('Articles is successfully deleted.');
    }
}