<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SpruceCase extends Model
{
    protected $table = 'spruce_case';


   /* public function setPictureAttribute($image)
    {
        if (is_array($image)) {
            $this->attributes['image'] = json_encode($image);
        }
    }*/

/*    public function getPictureAttribute($image)
    {
        return json_decode($image, true);
    }*/
}