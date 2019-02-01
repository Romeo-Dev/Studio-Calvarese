<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use App\Category;

class ServicesController extends Controller
{
    public function index(){
        $data['categories']=Category::all();
        $data['services']=Services::all();
         //return $data;
        return view('infos.servizi',$data);
    }
}
