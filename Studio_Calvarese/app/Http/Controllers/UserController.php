<?php

namespace App\Http\Controllers;

use Hash;
use DB;
use Illuminate\Http\Request;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getProfile(){
        $data['categories']=Category::all();
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

}
