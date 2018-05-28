<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusInfo extends Model
{
    protected $table = 'busInfo';

    public function business()
    {
        return $this->BelongsTo(Business::class);
    }
}