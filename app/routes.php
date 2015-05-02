<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

    Schema::create('users', function($newTable)
    {
        $newTable->increments('id');
        $newTable->string('name');
        $newTable->string('email');
        $newTable->string('stream');
        $newTable->date('usersince');
        $newTable->timestamps();
    });

    return View::make('hello');
});

Route::get('about', function(){
   return 'this is about';
});

Route::get('about/classes/{theSubject}', function($theSubject){
    return "Content about {$theSubject} classes goes here.";
});