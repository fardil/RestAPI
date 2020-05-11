<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    protected $table = 'bajus';

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
