<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorModel extends Model
{
    protected $table = 'vendors';
    // protected $fillable = ['nama_vendor','alamat_vendor','no_telp_vendor','id_user'];
    protected $primaryKey = 'id_vendor';
    public $timestamps = false;
    
    public function baju(){
        return $this->hasOne(Baju::class,'id_baju');
    }
    
    public function history(){
        return $this->hasOne(History::class,'id_history');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}
