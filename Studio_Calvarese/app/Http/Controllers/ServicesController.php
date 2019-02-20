<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Contact;

class ServicesController extends Controller
{
    public function index(){
        $data['categories']=Category::all();
        $data['contact']=Contact::all()->first();
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

    public function edit($id){
        $data['service']=Services::find($id);

        return view('dashboard.editservice',$data);
    }
    public function update(Request $request){
        $this->updateServizio($request->service,$request->id);
        $this->updateDesc($request->descrizione,$request->id);
        $this->updateIcon($request->icon,$request->id);

        return redirect('/dash/services')->with('alert','Servizio aggiornato con successo');

    }
    public function updateServizio($nome,$id){
        if ($nome == null)
            return;
        DB::table('services')
            ->where('id','=',$id)
            ->update(['service' => $nome]);
    }
    public function updateDesc($desc,$id){
        if ($desc == null)
            return ;
        DB::table('services')
            ->where('id','=',$id)
            ->update(['descrizione' => $desc]);
    }
    public function updateIcon($icon,$id){
        if ($icon == null)
            return;
        DB::table('services')
            ->where('id','=',$id)
            ->update(['icon' => $icon]);
    }
}
