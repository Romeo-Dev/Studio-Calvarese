<?php

namespace App\Http\Controllers;

use App\Image;
use App\Post;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $data['categories']=Category::all();
        $data['posts']=DB::table('posts')
            ->select('categoria','name','surname','titolo','giorno','paragraph_1','subtitle','paragraph_2','in_conclusion','paragraph_3')
            ->join('categories','category_id','=','categories.id')
            ->join('users','user_id','=','users.id')
            ->get();

            $data['images']= PostController::getImages();
           // return $data;
       return view('posts', $data);
    }

    public static function getImages(){

        $images['cover']=Image::all()->where('posizione','=','cover')->first();
        $images['left']=Image::all()->where('posizione','=','left')->first();
        $images['right']=Image::all()->where('posizione','=','right')->first();
        $images['various']=Image::all()->where('post_id','=','1');
        return $images;
    }
}
