<?php

namespace App\Http\Controllers;

use Hash;
use DB;
use Illuminate\Http\Request;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getProfile(){
        $data['categories']=Category::all();
        return view('auth.profilo',$data);
    }

    public function updateProfile(Request $request){
        $this->updateEmail($request->new_email);
        $this->updatePassword($request->new_password);
        return redirect('/profilo');
    }

    public function updateEmail($email){
        if ($email == null)
            return;
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['email' => $email]);
    }

    public function updatePassword($password){
        if ($password == null)
            return;
        $pwd = Hash::make($password);
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['password' => $pwd]);
    }
}
