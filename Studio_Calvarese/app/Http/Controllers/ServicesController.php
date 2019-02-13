<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index(){
        $data['categories']=Category::all();
        $data['services']=Services::all();
         //return $data;
        return view('infos.servizi',$data);
    }

    public function browse(){
        $data['services']=Services::all();
        return view('dashboard.servicesdash',$data);
    }

    public function delete($id){
        DB::table('services')
            ->where('id','=',$id)
            ->delete();

        return redirect('/dash/services')->with('alert','Servizio cancellato con successo');

    }
    public function store(Request $request){
        $Service = new Services();
        $Service->service=$request->service;
        $Service->descrizione=$request->descrizione;
        $Service->icon=$request->icon;
        $Service->save();

        return redirect('/dash/services')->with('alert','Servizio inserito con successo');

    }
}
