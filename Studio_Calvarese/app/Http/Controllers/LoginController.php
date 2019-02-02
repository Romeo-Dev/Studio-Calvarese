<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class LoginController extends Controller
{
    public function getLogin(){
        $data['categories']=Category::all();
        return view('access.login', $data);
    }
}
