<?php

namespace App\Http\Controllers;

// use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
 
class User extends Controller
{
    public function __construct(){
        $this->middleware("login");
    }

    public function index(){
        return "Sucessfully logged in";
    }
}
