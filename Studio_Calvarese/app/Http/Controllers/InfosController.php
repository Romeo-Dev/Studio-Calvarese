<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class InfosController extends Controller
{
    public function getContact(){
        $data['categories']=Category::all();
        return view('infos.contatti', $data);
    }

    public function getAboutme(){
        $data['categories']=Category::all();
        return view('infos.chisiamo',$data);
    }

}
