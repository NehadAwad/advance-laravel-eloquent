<?php

use Carbon\Factory;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;


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
    $users = User::all();
    $addresses = Address::all();

    //return $addresses[0]->user['name'];
    return view('user.index', compact('users', 'addresses'));
   //return $users[0]->address->country;
});
