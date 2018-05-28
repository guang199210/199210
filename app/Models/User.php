<?php
namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use AdminBuilder;

    protected $table = 'users';

    public function profile()
    {
        return $this ->hasOne(Profile::class);
    }

}
