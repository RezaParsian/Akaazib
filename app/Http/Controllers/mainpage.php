<?php

namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;

class mainpage extends Controller
{
    function Main()
    {
        return view("main");
    }

    function Contact()
    {
        return view("contact");
    }

    function Note()
    {
        $article=articles::where("status","=",1)->orderby("id","desc")->get();
        return view("note",compact("article"));
    }

    function NoteEx($id){
        $article=articles::where("slug","=",$id)->first();
        return view("noteex",compact("article"));
    }
}
