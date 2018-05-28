<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replys';

    public function comment()
    {
        return $this -> BelongsTo(Comment::class);
    }
}