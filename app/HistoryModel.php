<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryModel extends Model
{
    protected $table = 'histories';
    protected $primaryKey = 'id_history';
    public $timestamps = false;

    public function vendor(){
        return $this->belongsTo('class::vendor');
    }

    public function transaction(){
        return $this->belongsTo('class::transaction');
    }
}
