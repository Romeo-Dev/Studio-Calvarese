<?php

namespace App\Http\Controllers;

use App\About_us;
use App\Contact;
use App\Trophy;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Message;
use Illuminate\Support\Facades\Storage;

use File;


class InfosController extends Controller
{
    public function getContact()
    {
        $data['categories'] = Category::all();
        $data['contact']=Contact::all()->first();
        return view('infos.contatti', $data);
    }

    public function getAboutme()
    {
        $data['categories'] = Category::all();
        $data['contact']=Contact::all()->first();
        $data['about'] = About_us::all()->first();
        return view('infos.chisiamo', $data);
    }

    public function editAbout()
    {
        $data['about'] = About_us::all()->first();
        return view('dashboard.about_us', $data);
    }

    public function updateAboutUs(Request $request)
    {

        $this->updateChiSiamo($request->chi_siamo);
        $this->updateAbo($request->about_us);
        if ($request->hasFile('immagine')) {
            $cover = $request->file('immagine');
            Storage::disk('public')->put('images/logo/' . $cover->getClientOriginalName(), File::get($cover));
            //Store Db
            DB::table('about_uses')
                ->where('id', '=', '1')
                ->update(['immagine' => $cover->getClientOriginalName()]);
        }

        return redirect()->back()->with('alert', 'Presentazione aggiornata con successo');
    }

    public function updateChiSiamo($chi){
        if ($chi == null)
            return;
        DB::table('about_uses')
            ->where('id','=','1')
            ->update(['chi_siamo' => $chi]);
    }
    public function updateAbo($us){
        if ($us == null)
            return;
        DB::table('about_uses')
            ->where('id','=','1')
            ->update(['about_us' => $us]);
    }

    //--------------------------------------------------------

    //-----------------------Dash di contatti

    public function editContact(){
        $data['contact']=Contact::all()->first();
        return view('dashboard.contatti',$data);
    }

    public function updateContact(Request $request){

        $this->updateContactDesc($request->contact);
        $this->updateContactFacebook($request->facebook);
        $this->updateContactInstagram($request->instagram);
        $this->updateContactEmail($request->email);
        $this->updateContactNumber($request->number);
        $this->updateContactNome_via($request->nome_via);
        $this->updateContactLocation($request->maps);

        return redirect()->back()->with('alert','Sezione Contatti aggiornata con successo');
    }

    public function updateContactDesc($contact){
        if ($contact == null)
            return;
        DB::table('contacts')
            ->where('id','=','1')
            ->update(['contact' => $contact]);
    }
    public function updateContactFacebook($facebook){
        if ($facebook == null)
            return;
        DB::table('contacts')
            ->where('id','=','1')
            ->update(['facebook' => $facebook]);
    }

    public function updateContactInstagram($instagram){
        if ($instagram == null)
            return;
        DB::table('contacts')
            ->where('id','=','1')
            ->update(['instagram' => $instagram]);
    }
    public function updateContactEmail($email){
        if ($email == null)
            return;
        DB::table('contacts')
            ->where('id','=','1')
            ->update(['email' => $email]);
    }
    public function updateContactNumber($number){
        if ($number == null)
            return;
        DB::table('contacts')
            ->where('id','=','1')
            ->update(['number' => $number]);
    }
    public function updateContactNome_via($nome_via){
        if ($nome_via == null)
            return;
        DB::table('contacts')
            ->where('id','=','1')
            ->update(['nome_via' => $nome_via]);
    }
    public function updateContactLocation($location){
        if ($location == null)
            return;
        DB::table('contacts')
            ->where('id','=','1')
            ->update(['location' => $location]);
    }

    //---------------------------------------
    public function getTrophy(){

        $data['categories']=Category::all();
        $data['contact']=Contact::all()->first();

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

    public function deleteTrophy($id ,$trofeo){
        DB::table('trophies')
            ->where('id','=',$id)
            ->delete();

        Storage::disk('public')->delete('images/Trophies/'.$trofeo);

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


    Public function  editTrophy($id){
        $data['trophy'] = Trophy::all()->find($id);
        return view('dashboard.editTrophy',$data);
    }


    //------------------------update trophy
    public function update(Request $request){
        if ($request->title == null && $request->descrizione == null && $request->data == null) {
            return redirect()->back()->with('alert','Nessun campo aggiornato form vuota');
        }else {

            $this->updateTitolo($request->title, $request->id);
            $this->updateDesc($request->descrizione, $request->id);
            $this->updateIcon($request->data, $request->id);

            return redirect('/dash/trophies')->with('alert', 'Servizio aggiornato con successo');
        }

    }
    public function updateTitolo($title,$id){
        if ($title == null)
            return;
        DB::table('trophies')
            ->where('id','=',$id)
            ->update(['title' => $title]);
    }
    public function updateDesc($desc,$id){
        if ($desc == null)
            return ;
        DB::table('trophies')
            ->where('id','=',$id)
            ->update(['description' => $desc]);
    }
    public function updateIcon($data,$id){
        if ($data == null)
            return;
        DB::table('trophies')
            ->where('id','=',$id)
            ->update(['conseguimento' => $data]);
    }

}
