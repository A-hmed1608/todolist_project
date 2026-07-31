<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/todolist', function () {
    return view('todolist');
});

Route::get('/todolist', function () {
    $todolist=DB::table('todolist')->get();

   return view('todolist',[
    'todolist'=>$todolist
   ]);

});
Route::post('/todolist', function () {
    $description=request('todolist');
    if (! empty($description)) {
        DB::table('todolist')->insert([
            'description' => $description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    return redirect('/todolist');

});
