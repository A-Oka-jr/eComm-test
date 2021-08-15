<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class userController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where(['email'=>$request->email])->first();
        if(!$user || Hash::check($request->password , $user->password))
        {
            return 'username or passsword not matched';
        }else{
            $request->session()->put('user',$user);
            return redirect('products');
        }
    }
}
