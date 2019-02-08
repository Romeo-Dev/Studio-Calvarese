<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Controllers\Auth;
class CommentController extends Controller
{
    public function commit(Request $request){
        $Comment = new Comment();
        $Comment->user_id = \Illuminate\Support\Facades\Auth::id();

        $Comment->post_id = $request->post_id;
        $Comment->text = $request->text;
        $Comment->save();
        return redirect('/');

    }
}
