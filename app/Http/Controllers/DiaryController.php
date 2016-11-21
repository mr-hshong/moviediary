<?php

namespace App\Http\Controllers;


use App\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        echo $request->movie_id;

        $diary = new Diary();
        $diary->body = $request->body;
        $diary->seen_date = $request->seen_date;
        $diary->user_id = $request->user()->id;
        $diary->movie_id = $request->movie_id;
        $diary->save();

//        $request->user()->diaries()->create([
//
//            'body' => $request->body,
//            'seen_date' =>date($request->seen_date)
//        ]);

        return redirect('/');
    }
}
