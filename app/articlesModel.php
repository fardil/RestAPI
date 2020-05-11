<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articlesModel extends Model
{
   protected $table = 'articles'; //nama table yang kita buat lewat migration adalah articles
   protected $primaryKey = 'id_artikel';
}