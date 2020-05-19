<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register (Request $request){
        $this->validate($request,[
            'email' => 'required|unique:user|max:255',
            'password' => 'required|min:8'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        $hashPwd = Hash::make($password); //supaya tidak dikenali sebagai kata utuh

        $data = [
            'email' => $email,
            'password' => $hashPwd
        ];

        if(UserModel::create($data)){
            $out = [
                'message' => 'register_success',
                'code' => 201,
            ];
        } else{
            $out = [
                'message' => 'failed_register',
                'code' => 404
            ];
        }
        return response()->json($out, $out['code']);
    }
    public function login (Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $email = $request -> input('email');
        $password = $request -> input('password');

        $user = UserModel::where('email',$email)->first();

        if(!$user){
            $out = [
                'message' => 'login_failed',
                'code' => 401,
                'result' => [
                    'token' => null,
                ]
            ];
            return response()->json($out, $out['code']);
        }

        if(Hash::check($password, $user->password)){
            $newtoken = $this->generateRandomString();

            $user->update([
                'token' => $newtoken
            ]);

            $out = [
                'message' => 'login_success',
                'code' => 200,
                'result' => [
                    'token' => $newtoken,
                ] 
            ];
        } else {
            $out = [
                'message' => 'login_failed',
                'code' => 401,
                'result' => [
                    'token' => null,
                ]
            ];
        }
        return response() -> json($out,$out['code']);
    }
    function generateRandomString($length = 15){
        $karakter="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $panjang_karakter=strlen($karakter);
        $str='';
        for ($i = 0; $i <$length; $i++){
            $str .= $karakter[rand(0, $panjang_karakter -1)];
        }
        return $str;
    }
}
