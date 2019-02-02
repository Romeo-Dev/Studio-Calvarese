<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services;
class MainController extends Controller
{
    public function index(){
        $data['categories']=Category::all();
        $data['services'] = Services::take(4)->get();
        //return $data;
       return view('layouts.homepage',$data);
    }
}
