<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
   protected $table = 'transactions'; //nama table yang kita buat lewat migration adalah transactions
   protected $primaryKey = 'id_transaction';
   public $timestamps = false;

   public function history(){
      return $this->hasMany('class::history');
  }

   public function user(){
      return $this->belongsToMany('class:user');
   }
  
   public function baju(){
      return $this->belongsTo('class::baju');
   } 
}