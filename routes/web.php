<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/todolist', function () {
    $todolist = DB::table('todolist')->orderBy('position', 'asc')->get();

    return view('todolist', [
        'todolist' => $todolist,
    ]);
});

Route::post('/todolist', function () {
    $description = request('todolist');
    if (! empty($description)) {
        $maxPosition = DB::table('todolist')->max('position') ?? 0;

        DB::table('todolist')->insert([
            'description' => $description,
            'position' => $maxPosition + 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    return redirect('/todolist');
});
// Supprimer un élément
Route::delete('/todolist/{id}', function ($id) {
    DB::table('todolist')->where('id', $id)->delete();
    return redirect('/todolist');
});

// Monter un élément
Route::post('/todolist/{id}/up', function ($id) {
    $currentItem = DB::table('todolist')->where('id', $id)->first();

    $previousItem = DB::table('todolist')
        ->where('position', '<', $currentItem->position)
        ->orderBy('position', 'desc')
        ->first();
    if ($previousItem) {
        // Échanger les positions
        DB::table('todolist')->where('id', $currentItem->id)->update(['position' => $previousItem->position]);
        DB::table('todolist')->where('id', $previousItem->id)->update(['position' => $currentItem->position]);
    }
    return redirect('/todolist');
});

//descendre un élément
Route::post('/todolist/{id}/down', function ($id) {
    $currentItem = DB::table('todolist')->where('id', $id)->first();

    $nextItem = DB::table('todolist')
        ->where('position', '>', $currentItem->position)
        ->orderBy('position', 'asc')
        ->first();
    if ($nextItem) {
        // Échanger les positions
        DB::table('todolist')->where('id', $currentItem->id)->update(['position' => $nextItem->position]);
        DB::table('todolist')->where('id', $nextItem->id)->update(['position' => $currentItem->position]);
    }
    return redirect('/todolist');
});

// Page Contact
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {
    return back()->with('success', 'Votre message a été envoyé avec succès !');
});
