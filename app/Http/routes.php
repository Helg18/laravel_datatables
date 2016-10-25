<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('usuarios/search', function(){
	//return Datatables::eloquent(User::query())->make(true);
	$users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

	$url = '';

	return Datatables::of($users)
	    ->addColumn('action', function ($user) {
	        return '<a type="button" class="btn btn-primary" href="user/'.$user->id.'/edit">edit</a>';
	    })
	    ->make(true);
});

Route::resource('user', 'UserController');
//Route::get('user/{id}/edit', 'UserController@edit');


//data-toggle="modal" data-target="#myModal">