<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Contact;

class StampeController extends Controller
{
    public function getStampe($id){
        $data['categories']=Category::all();
        $data['contact']=Contact::all()->first();

        $data['stampe']= DB::table('images')
            ->select('titolo','path','categoria','stato','images.id')
            ->join('posts','posts.id','=','post_id')
            ->join('categories','category_id','=','categories.id')
            ->where('post_id','=',$id)
            ->where('stato','=','published')
            ->get();

        //return $data;
        if (sizeof($data['stampe'])>0)
        return view('services.stampeEvento',$data);
        else{

            return redirect()->route('gestioneEvento',$data)->with('alert','Non ci sono piu immagini disponibili per la stampa');
        }

    }


    public function updateByAuth(Request $request){

        $stato = $request->get('checked');

        if ( is_array($stato) && sizeof($stato)>0) {
            for ($i = 0; $i < sizeof($stato); $i++) {

                DB::table('images')
                    ->where('id', '=', $stato[$i])
                    ->update(['stato' => 'stampe']);
            }
            return redirect('/gestisciEvento')->with('alertsucc', 'Stampe mandate con successo');
        }else {
            return redirect('/gestisciEvento')->with('alertdanger','Non hai selezionato nessun immagine da stampare');
        }
    }
}
