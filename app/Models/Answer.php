<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    public function ask()
    {
       return $this->BelongsTo(Ask::class);
    }
    public function reply()
    {
        return $this ->HasOne(reply::class);
    }
}
