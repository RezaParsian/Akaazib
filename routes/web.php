<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', "mainpage@Main")->name("root");
Route::get("contact", "mainpage@Contact")->name("contact");
Route::get("/note", "mainpage@Note")->name("note");
Route::get("/note/{id}", "mainpage@NoteEx")->name("noteex");

Route::group(['prefix' => 'admin', "namespace" => "Admin", "middleware" => "auth"], function () {
    Route::get('/', "main@DashBoard")->name("dashboard");
    Route::get('/notes', "main@Notes")->name("notes");
    Route::delete('/notes', "main@DeleteNote")->name("note.delete");
    Route::get('/addnote', "main@AddNote")->name("note.add");
    Route::Post('/savenote', "main@SaveNote")->name("note.save");
    Route::get("/status/{id}", "main@ChangeStatus")->name("note.status");
    Route::get("viewnote/{id}","main@ViewNote")->name("note.view");
    Route::put("viewnote","main@UpdateNote")->name("note.update");
});

Route::prefix('kezb')->group(function () {
    Route::get('aval', function () {
        return view("kezb.aval");
    });
});

Auth::routes(['register' => false]);
