<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    public function comment()
    {
        return $this -> HasOne(Comment::class);
    }

    public static function boot()
    {
        parent::boot();

        static ::saving(function ($model){

        });
    }
}
