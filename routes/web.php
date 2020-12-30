<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\post;
use App\Models\video;

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
    // $user = User::create([
    //     'name'=>'hamza',
    //     'email'=>'hamza@gmail.com',
    //     'password'=>Hash::make('password')
    // ]);
    // $post=post::create([
    //     'userid'=>$user->id,
    //     'title'=>'example post title'
    // ]);
    // $post->comments()->create([
    //     'userid'=>$user->id,
    //     'body'=>'comment for post'
    // ]);
    // $post =post::find(1);
    // dd($post->comments);
    $video = video::create([
       
        'title'=> 'comment for video'
    ]);
    $video->comments()->create([
            'userid'=>3,
            'body'=>'comment for video'
        ]);
    //     $video = video::find(3);
    // dd($video->comments);

    return view('welcome');
});
