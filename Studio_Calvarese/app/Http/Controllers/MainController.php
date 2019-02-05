<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services;
class MainController extends Controller
{
    public function index(){
        $data['categories']=Category::all();
        $data['services'] = Services::take(4)->get();

        $data['posts']=DB::table('posts')
            ->select('posts.id','titolo','path','paragraph_1','categoria','giorno')
            ->join('images','post_id','=','posts.id')
            ->join('categories','category_id','=','categories.id')
            ->where('posizione','=','cover')
            ->orderBy('giorno','desc')
            ->take(6)
            ->get();
        //return $data;
       return view('layouts.homepage',$data);
    }
}
