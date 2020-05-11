<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
   protected $table = 'transactions'; //nama table yang kita buat lewat migration adalah todo

   public function history(){
      return $this->hasMany('class::vendor');
  }

   public function user(){
      return $this->belongsToMany('class:user');
   }
  
   public function baju(){
      return $this->belongsTo('class::baju');
   } 
}