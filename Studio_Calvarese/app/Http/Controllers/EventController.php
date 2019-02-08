<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function getCategory($categoria){
        $data['categories']=Category::all();

        $data['section']=Category::all()->where('categoria','=',$categoria)->first();

        $data['all']=DB::table('posts')
            ->select('categoria','titolo','path','giorno','paragraph_1','posts.id')
            ->join('categories','category_id','=','categories.id')
            ->join('images','post_id','=','posts.id')
            ->where('categoria','=',$categoria)
            ->where('posizione','=','cover')
            ->where('pubblicato','=','si')
            ->simplePaginate(3);

        //return $data;
        return view('posts.eventi', $data);
    }

    public function getEventByAuth(){
        $data['categories']=Category::all();
        $id =Auth::id();
        $data['events']=DB::table('posts')
            ->select('posts.id','titolo','categoria')
            ->join('categories','category_id','=','categories.id')
            ->where('user_id','=',$id)
            ->get();

        return view('services.gestioneEventi',$data);
    }
}
