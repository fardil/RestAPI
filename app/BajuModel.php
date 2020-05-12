<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BajuModel extends Model
{
    protected $table = 'bajus';
    protected $primaryKey = 'id_baju';
    public $timestamps = false;
    
    public function transaction(){
        return $this->hasOne('transaction::class');
    }

    public function user(){
        return $this->belongsTo('user::class');
    }

    public function vendor(){
        return $this->belongsTo('vendor::class');
    }
}
