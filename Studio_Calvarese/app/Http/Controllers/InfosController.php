<?php

namespace App\Http\Controllers;

use App\Trophy;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Message;
use Illuminate\Support\Facades\Storage;
use File;

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

    public function getTrophyByAdmin(){
        $data['trophies']=DB::table('trophies')
            ->orderBy('conseguimento','desc')
            ->get();
        return view('dashboard.trophydash',$data);
    }

    public function storeTrophy(Request $request){


        if ($request->hasFile('trofeo')) {

            $cover = $request->file('trofeo');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put('images/Trophies/'.$cover->getFilename().'.'.$extension,  File::get($cover));

        }else
            return redirect()->back()->with('alert','Nessun file inserito');

        $Trophy = new Trophy();
        $Trophy->title = $request->title;
        $Trophy->trofeo = $cover->getFilename().'.'.$extension;
        $Trophy->conseguimento = $request->date;
        $Trophy->description = $request->descrizione;
        $Trophy->save();
        return redirect('/dash/trophies')->with('alert','Trofeo inserito con successo');
    }

    public function deleteTrophy($id){
        DB::table('trophies')
            ->where('id','=',$id)
            ->delete();
        return redirect('/dash/trophies')->with('alert','Trofeo cancellato con successo');
    }



    public function send(Request $request){
        $Message = new Message();
        $Message->nome =$request->nome;

        $Message->cognome = $request->cognome;
        $Message->email = $request->email;
        $Message->text = $request->message;
        $Message->save();
        return redirect('/');
    }

    public function sendByAuth(Request $request){
        $Message = new Message();
        $Message->nome =$request->name;

        $Message->cognome = $request->surname;
        $Message->email = $request->email;
        $Message->text = $request->message;
        $Message->save();
        return redirect('/');

    }

    public function browse(){
        $data['messages']=DB::table('messages')->where('risposta','=','no')->orderby('timestamp','DESC')->get();
        return view('dashboard.messagesdash',$data);
    }

    public function delete($id){
        DB::table('messages')
            ->where('id','=',$id)
            ->update(['risposta' => 'si']);

        return redirect('/dash/messages')->with('alert','Commento cancellato con successo');
    }
    
}
