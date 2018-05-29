<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';


    public static function boot()
    {
        parent::boot();

        static ::saving(function ($model){

        });
    }
}
