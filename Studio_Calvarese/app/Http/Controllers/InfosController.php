<?php

namespace App\Http\Controllers;

use App\Trophy;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

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

    public function getTrophy(){

        $data['categories']=Category::all();

        $data['trophies']=DB::table('trophies')
        ->orderBy('conseguimento','desc')
        ->get();
        return view('infos.trofei',$data);
    }

}
