<?php

namespace App\Http\Controllers;

use App\Image;
use App\Contact;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getPost($id){
        $save=$id;
        $data['categories']=Category::all();
        $data['contact']=Contact::all()->first();
        $data['posts']=DB::table('posts')
            ->select('posts.id','categoria','name','surname','titolo','giorno','paragraph_1','subtitle','paragraph_2','in_conclusion','paragraph_3')
            ->join('categories','category_id','=','categories.id')
            ->join('users','user_id','=','users.id')
            ->where('posts.id','=',$id)
            ->where('posts.pubblicato','=','si')
            ->get();

        $data['comments']=DB::table('comments')
            ->select('name','surname','text','timestamp')
            ->join('users','user_id','=','users.id')
            ->join('posts','post_id','=','posts.id')
            ->where('posts.id','=',$id)
            ->get();


            $data['images']= PostController::getImages($save);
            //return $data;
       return view('posts.posts', $data);
    }

    public static function getImages($id){

        $images['cover']=Image::all()->where('posizione','=','cover')->where('post_id','=',$id)->first();
        $images['left']=Image::all()->where('posizione','=','left')->where('post_id','=',$id)->first();
        $images['right']=Image::all()->where('posizione','=','right')->where('post_id','=',$id)->first();
        $images['various']=Image::all()->where('post_id','=',$id);
        return $images;
    }
}
