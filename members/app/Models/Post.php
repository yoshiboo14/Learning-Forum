<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //フォームに投稿された内容をデータベースに保存するには許可が必要
    // fillableは入力していい項目という意味
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'image',
    ];

    public function user(){
        return $this->belongsTo("App\Models\User");
    }


}
