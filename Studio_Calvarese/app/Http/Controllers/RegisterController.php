<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class RegisterController extends Controller
{
    public function getRegistration(){
        $data['categories']=Category::all();
        return view('access.register', $data);
    }
}
