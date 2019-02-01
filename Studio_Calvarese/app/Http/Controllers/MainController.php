<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $data['categories']=Category::all();
       // return$data;
        return view('layouts.homepage',$data);
    }
}
