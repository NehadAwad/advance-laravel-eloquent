<?php

use Carbon\Factory;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;
use App\Models\Post;


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
    return view('welcome');
});

Route::get('/user', function () {
    //$users = User::all();
    $addresses = Address::with('user')->get();  
    $has = Address::with('user')->get();
    $users = User::with('addresses')->get();
    return view('user.index', compact( 'addresses', 'has', 'users'));
   //return $users[0]->address->country;
});

Route::get('/posts', function () {
    Post::create([
        'user_id' => 1,
        'title' => 'post title 1'
    ]);

    Post::create([
        'user_id' => 2,
        'title' => 'post title 2'
    ]);
});
