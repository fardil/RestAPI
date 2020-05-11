<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Vendor extends Model
{
    protected $table = 'vendors';

    public function baju(){
        return $this->hasOne('baju::class');
    }
    
    public function history(){
        return $this->hasOne('history::class');
    }

    public function user(){
        return $this->belongsTo('user::class');
    }
}
