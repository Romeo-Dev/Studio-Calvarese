<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Controllers\Auth;
use DB;

class CommentController extends Controller
{
    public function commit(Request $request){
        $Comment = new Comment();
        $Comment->user_id = \Illuminate\Support\Facades\Auth::id();

        $Comment->post_id = $request->post_id;
        $Comment->text = $request->text;
        $Comment->save();
        return redirect('posts/'.$Comment->post_id.'#comment');

    }

    public function browse(){
        $data['comments']=DB::table('comments')
            ->select('comments.id','name','surname','titolo','text','timestamp')
            ->join('users','user_id','=','users.id')
            ->join('posts','post_id','=','posts.id')
            ->orderby('timestamp','DESC')
            ->get();
        return view('dashboard.commentsdash',$data);
    }

    public function delete($id){
        DB::table('comments')
            ->where('id','=',$id)
            ->delete();

        return redirect('/dash/comments')->with('alert','Commento cancellato con successo');
    }
}
