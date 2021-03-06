<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;
use App\Contact;

class UserController extends Controller
{
    public function getProfile(){
        $data['categories']=Category::all();
        $data['contact']=Contact::all()->first();
        return view('auth.profilo',$data);
    }

    public function getProfiloAdmin(){
        return view('dashboard.profiloadmin');
    }

    public function updateProfile(Request $request){

        if ($request->new_email != null || $request->new_password != null) {
            $this->updateEmail($request->new_email);
            $this->updatePassword($request->new_password);

            if (Auth::user()->group_id == '1')
                return redirect('/profiloadmin')->with('alert', 'Profilo Aggiornato con successo');
            else
                return redirect('/profilo');
        }elseif (Auth::user()->group_id == '1')
            return redirect('/profiloadmin')->with('alert', 'Nessun Campo da aggiornare');
        else
            return redirect('/profilo');

    }

    public function updateEmail($email){
        if ($email == null)
            return;
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['email' => $email]);
    }

    public function updatePassword($password){
        if ($password == null)
            return;
        $pwd = Hash::make($password);
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['password' => $pwd]);
    }

    public function getUsersByAdmin(){
        $data['users']=DB::table('users')
            ->get();
        return view('dashboard.usersdash',$data);
    }

    public function getEventsByUser($id){
        $data['user']=User::find($id);

        $data['events']=DB::table('posts')
            ->select('posts.id','titolo','categoria','giorno','pubblicato','impaginato')
            ->join('categories','category_id','=','categories.id')
            ->where('user_id','=',$id)
            ->get();
        return view('dashboard.eventsbyuser',$data);
    }


    public function getGestione($id,$titolo){
        $data['utente']=User::all()->find($id);
        $data['event']=DB::table('posts')
            ->select('posts.id','category_id','user_id','pubblicato','impaginato','titolo','giorno','paragraph_1','subtitle',
                'paragraph_2','in_conclusion','paragraph_3','categoria')
            ->join('categories','category_id','=','categories.id')
            ->where('user_id','=',$id)
            ->where('titolo','=',$titolo)
            ->get();
        $data['stampe']=DB::table('posts')
            ->select('path','images.id')
            ->join('images','post_id','=','posts.id')
            ->where('user_id','=',$id)
            ->where('titolo','=',$titolo)
            ->where('stato','=','stampe')
            ->get();
       // return $data;
        return view('dashboard.gestisciEventByUser',$data);
    }

    public function uploadImp(Request $request){

        if ($request->impaginato != null) {

            $cover = $request->file('impaginato');
            $cat = $request->categoria;
            $titolo = $request->titolo;
            Storage::disk('public')->put('images/'.$cat.'/'.$titolo.'/'.$cover->getClientOriginalName(),  File::get($cover));

            DB::table('posts')
                ->where('posts.id','=',$request->id)
                ->update(['impaginato' => $cover->getClientOriginalName()]);

            return redirect('dash/users')->with('alert','Impaginato caricato con successo');
        }else
            return redirect()->back()->with('alert','Nessun file inserito');

    }

}
