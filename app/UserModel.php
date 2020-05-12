<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class UserModel extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * 
     */
    protected $fillable = [
        'email', 'password', 'token'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * 
     */
    protected $hidden = [
        'password',
    ];

    public function baju(){
        return $this->hasOne('baju::class');
    }
    
    public function transaction(){
        return $this->hasOne('transaction::class');
    } 

    public function vendor(){
        return $this->hasOne('vendor::class');
    } 
}
