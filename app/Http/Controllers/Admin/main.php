<?php

namespace App\Http\Controllers\Admin;

use App\articles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class main extends Controller
{
    public function DashBoard()
    {
        return view("dashboard.dashboard");
    }

    public function Notes()
    {
        $article = articles::orderby("id", "desc")->get();
        return view("dashboard.note.notes", compact("article"));
    }

    public function AddNote()
    {
        return view("dashboard.note.add");
    }

    public function SaveNote(Request $request)
    {
        $valid = $this->validate($request, [
            "id" => "required",
            "title" => "required",
            "slug" => "required",
            "tags" => "required",
            "content" => "required",
        ]);

        articles::create([
            "user_id" => $valid['id'],
            "category_id" => -1,
            "type" => "note",
            "title" => $valid["title"],
            "ex_title" => $request["ex-title"],
            "slug" => $valid["slug"],
            "content" => $valid["content"],
            "tag" => $valid["tags"],
        ]);

        return back()->with("msg", "یادداشت مورد نظر با موفقیت ثبت شد.");
    }

    public function DeleteNote(Request $request)
    {
        $article = articles::find($request["post_id"]);
        $article->delete();
        return back()->with("title", $article["title"]);
    }

    public function ChangeStatus($id)
    {
        $article = articles::find($id);

        $new = $article->status == 1 ? 0 : 1;

        $article->update([
            "status" => $new
        ]);
    }

    public function ViewNote($id)
    {
        $article = articles::find($id);
        return view("dashboard.note.view", compact("article"));
    }

    public function UpdateNote(Request $request)
    {
        $valid = $this->validate($request, [
            "id" => "required",
            "title" => "required",
            "slug" => "required",
            "tags" => "required",
            "content" => "required",
        ]);

        $article = articles::find($request->post_id);

        $article->update([
            "title" => $valid["title"],
            "ex_title" => $request["ex-title"],
            "slug" => $valid["slug"],
            "content" => $valid["content"],
            "tag" => $valid["tags"],
        ]);

        return back()->with("msg","یادداشت مورد نظر با موفقیت بروزرسانی شد.");
    }
}
