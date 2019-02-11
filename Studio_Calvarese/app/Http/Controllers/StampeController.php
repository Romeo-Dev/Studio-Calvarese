<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class StampeController extends Controller
{
    public function getStampe($id){
        $data['categories']=Category::all();

        $data['stampe']= DB::table('images')
            ->select('titolo','path','categoria','stato','images.id')
            ->join('posts','posts.id','=','post_id')
            ->join('categories','category_id','=','categories.id')
            ->where('post_id','=',$id)
            ->where('stato','=','published')
            ->get();

        //return $data;
        return view('services.stampeEvento',$data);

    }


    public function updateByAuth(Request $request){

            return $request;
    }
}
