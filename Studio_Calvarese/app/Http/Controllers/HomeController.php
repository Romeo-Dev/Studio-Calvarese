<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['home']=Home::all()->first();
        return view('dashboard.homedash',$data);
    }

    public function updateHome(Request $request){
        if ($request->hasFile('carosello1')){
        $carosello1=$request->file('carosello1');
        $this->updateHomeCarosello1($carosello1);
        }if ($request->hasFile('carosello2')){
            $carosello2=$request->file('carosello2');
            $this->updateHomeCarosello2($carosello2);
        }if ($request->hasFile('carosello3')){
            $carosello3=$request->file('carosello3');
            $this->updateHomeCarosello3($carosello3);
        }if ($request->hasFile('video')){
            $video=$request->file('video');
            $this->updateHomeVideo($video);
        }
        $this->updateHomeVideoDesc($request->video_desc);
        $this->updateHomeTitoloVideo($request->video_titolo);

        return redirect()->back()->with('alert','Homepage aggiornata con successo');
    }

    public function updateHomeCarosello1($carosello){
        //Store in laravel
        Storage::disk('public')->put('home/'.$carosello->getClientOriginalName(), File::get($carosello));
        //Store Db
        DB::table('homes')
            ->where('id', '=', '1')
            ->update(['carosel_1' => $carosello->getClientOriginalName()]);
    }

    public function updateHomeCarosello2($carosello){
        //Store in laravel
        Storage::disk('public')->put('home/'.$carosello->getClientOriginalName(), File::get($carosello));
        //Store Db
        DB::table('homes')
            ->where('id', '=', '1')
            ->update(['carosel_2' => $carosello->getClientOriginalName()]);
    }
    public function updateHomeCarosello3($carosello){
        //Store in laravel
        Storage::disk('public')->put('home/'.$carosello->getClientOriginalName(), File::get($carosello));
        //Store Db
        DB::table('homes')
            ->where('id', '=', '1')
            ->update(['carosel_3' => $carosello->getClientOriginalName()]);
    }

    public function updateHomeTitoloVideo($titolo){
        if ($titolo == null)
            return;

        DB::table('homes')
            ->where('id','=','1')
            ->update(['video_titolo' => $titolo]);
    }
    public  function updateHomeVideo($video){

        //Store in laravel
        Storage::disk('public')->put('home/'.$video->getClientOriginalName(), File::get($video));
        //Store Db
        DB::table('homes')
            ->where('id', '=', '1')
            ->update(['video' => $video->getClientOriginalName()]);
    }
    public function updateHomeVideoDesc($desc){
        if ($desc == null)
            return;

        DB::table('homes')
            ->where('id','=','1')
            ->update(['video_desc' => $desc]);
    }
}
