<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Contact;
use App\Prenotation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrenotationController extends Controller
{
    public function store(){
        $data['categories']=Category::all();
        $data['contact']=Contact::all()->first();
        $data['prenotazioni']=Prenotation::all()->where('user_id','=',Auth::user()->id);
        $prenotazione = new Prenotation();
        $prenotazione->user_id=Auth::user()->id;
        $prenotazione->save();
        return view('services.prenotazioni', $data);
    }

    public function browse(){
        $data['prenotazioni']=DB::table('prenotations')
        ->select('email','prenotations.id','appuntamento','ora','stato')
        ->join('users','user_id','=','users.id')
        ->get();
        return view('dashboard.prenotationdash', $data);
    }

    public function updatePrenotation($id){
        DB::table('prenotations')
            ->where('id','=',$id)
            ->update(['stato' => 'accettata']);
        return view('dashboard.editprenotation');
    }

    public function getPrenotation(){
        $data['categories']=Category::all();
        $data['contact']=Contact::all()->first();
        $data['prenotazioni']=Prenotation::all()->where('user_id','=',Auth::user()->id);
        return view('services.prenotazioni',$data);
    }
}
