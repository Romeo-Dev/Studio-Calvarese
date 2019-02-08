<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class UserController extends Controller
{
    public function getProfile(){
        $data['categories']=Category::all();
        return view('auth.profilo',$data);
    }
}
