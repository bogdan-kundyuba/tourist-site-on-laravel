<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'CustomController@index');

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store')->name('contact');


//Route::get('/contacts', function(){
//    
//    $contacts = DB::table('contacts')->latest()->get();
//    
//    return view('contacts.index', compact('contacts'));
//});
//
//Route::get('/contacts/{contact}', function($id){
//    
//    $contact = DB::table('contacts')->find($id);
//    
//    var_dump($id);
//    dd($contact);
//    
//    return view('contacts.show', compact('contacts'));
//});

