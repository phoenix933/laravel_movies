<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Comment;
use Auth;

class MainController extends Controller
{
    public function welcome()
    {
        $films = Film::all();
        return view('welcome')->with('films', $films);
    }
    public function film($id)
    {
        $film = Film::find($id);
        return view('film')->with('film', $film);
    }
    public function sendComment(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::id();
        $comment->film_id = $request->film_id;
        $comment->save();
        return redirect()->back();
    }
}
