<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;

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
            ->select('posts.id','titolo','categoria','giorno','pubblicato','impaginato')
            ->join('categories','category_id','=','categories.id')
            ->where('user_id','=',$id)
            ->get();
      //return $data;
        return view('services.gestioneEventi',$data);
    }

    public function setEventPublication($id){

        DB::table('posts')
            ->where('id', $id)
            ->update(['pubblicato' => 'si']);
        return redirect('/gestisciEvento');
    }

    public function getEventsByAdmin(){
        $data['categories']=Category::all();
        $data['events']=DB::table('posts')
            ->select('posts.id','titolo','categoria','email','giorno','pubblicato','impaginato')
            ->join('categories','category_id','=','categories.id')
            ->join('users','user_id','=','users.id')
            ->get();
        return view('dashboard.eventsdash',$data);
    }

    public function deletePublishedEvent($id){
        DB::table('posts')
            ->where('id','=',$id)
            ->update(['pubblicato' => 'no']);

        return redirect('/dash/events')->with('alert','Evento cancellato con successo');
    }

    public function editEvent($id){
        $data['categories']=Category::all();
        $data['event'] = Post::all()->find($id);
        return view('dashboard.editEvent',$data);
    }


}
