<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
use App\Image;


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
        $data['event'] = DB::table('posts')
        ->join('categories','category_id','=','categories.id')
        ->where('posts.id','=',$id)
        ->first();
        $data['images'] = Image::all()->where('post_id','=',$id);
        return view('dashboard.editEvent',$data);
    }

    public function updateEvent(Request $request){

        $this->updatePubblicato($request->pubblicato,$request->id);
        $this->updateGiorno($request->data,$request->id);
        $this->updatePar1($request->par1,$request->id);
        $this->updateSottotitolo($request->sottotitolo,$request->id);
        $this->updatePar2($request->par2,$request->id);
        $this->updateConclusione($request->conclusione,$request->id);
        $this->updatePar3($request->par3,$request->id);
        return redirect('/dash/events')->with('alert','Evento aggiornato con successo');
    }

    public function updatePubblicato($pub,$id){
        if ($pub == null)
            return ;
        DB::table('posts')
            ->where('id','=',$id)
            ->update(['pubblicato' => $pub]);
    }
    public function updateGiorno($giorno,$id){
        if ($giorno == null)
            return;
        DB::table('posts')
            ->where('id','=',$id)
            ->update(['giorno' => $giorno]);
    }
    public function updatePar1($par1,$id){
        if ($par1 == null)
            return;
        DB::table('posts')
            ->where('id','=',$id)
            ->update(['paragraph_1' => $par1]);
    }
    public function updateSottotitolo($sottotitolo,$id){
        if ($sottotitolo == null)
            return;
        DB::table('posts')
            ->where('id','=',$id)
            ->update(['subtitle' => $sottotitolo]);
    }
    public function updatePar2($par2,$id){
        if ($par2 == null)
            return;
        DB::table('posts')
            ->where('id','=',$id)
            ->update(['paragraph_2' => $par2]);
    }
    public function updateConclusione($conclusione,$id){
        if ($conclusione == null)
            return;
        DB::table('posts')
            ->where('id','=',$id)
            ->update(['in_conclusion' => $conclusione]);
    }
    public function updatePar3($par3,$id){
        if ($par3 == null)
            return;
        DB::table('posts')
            ->where('id','=',$id)
            ->update(['paragraph_3' => $par3]);
    }

    public function insertEvent(Request $request){
        $post = new Post();
        $user=User::all()->where('email','=',$request->email)->first();
        $cat=Category::all()->where('categoria','=',$request->categoria)->first();
        $post->user_id=$user->id;
        $post->category_id=$cat->id;
        $post->giorno=$request->date;
        $post->titolo=$request->titolo;
        $post->paragraph_1=$request->descrizione1;
        $post->subtitle=$request->sottotitolo;
        $post->paragraph_2=$request->descrizione2;
        $post->in_conclusion=$request->conclusione;
        $post->paragraph_3=$request->descrizione3;
        $post->pubblicato=$request->pubblicato;
        $post->save();
        return redirect('/dash/events')->with('alert','Evento inserito con successo');
    }




}
