<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public function article()
    {
        return $this -> BelongsTo(Article::class);
    }

    public function reply()
    {
        return $this->HasOne(Reply::class);
    }
}
