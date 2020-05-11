<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'histories';
    
    public function vendor(){
        return $this->belongsTo('class::vendor');
    }

    public function transaction(){
        return $this->belongsTo('class::transaction');
    }
}
