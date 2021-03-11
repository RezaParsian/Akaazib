<?php

namespace App;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $fillable=[
        "category_id",
        "user_id",
        "title",
        "ex_title",
        "slug",
        "content",
        "tag",
        "img",
        "type",
        "status"
    ];

    function time(){
        $v=new Verta($this->created_at);
        return ($v->format('j  %B  %Y'));
    }
}
