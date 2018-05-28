<?php
namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use AdminBuilder;

    protected $table = 'businesses';

    public function busInfo()
    {
        return $this ->hasOne(BusInfo::class);
    }

}