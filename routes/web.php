<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $movies = DB::table('movies')->leftJoin('diaries', 'movies.id', '=', 'diaries.movie_id')
        ->selectRaw( 'movies.id, movies.title, movies.release_date, count(diaries.id) as diariescount')
        ->groupBy('movies.id','movies.title','movies.release_date')
        ->get();
    //$movies = App\Movie::orderBy('release_date', 'desc')->get();
    //DB::table('users')->select('users.id','users.name','profiles.photo')->join('profiles','profiles.id','=','users.id')->where(['something' => 'something', 'otherThing' => 'otherThing'])->get();


    return view('index', [
        'movies' => $movies
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('diaries/write',function(){

    return view('diaries.write');

});

Route::post('diaries', 'DiaryController@store');