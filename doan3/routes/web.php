<?php

use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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


Route::get('validation','ValidationController@getVali');
Route::post('validation','ValidationController@postVali');
// Route::get('conv',function () {
//     $users = App\users::all();
//     foreach($users as $user){
//         $a=App\users::find($user->id);
//         $a->password=bcrypt('123456');
//         $a->save();
//     }
// });
Route::get('logout','ValidationController@logOut');
Route::get('register','ValidationController@getRegis');
Route::post('register','ValidationController@postRegis');

