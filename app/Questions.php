<?php

namespace App;

use App\Model\Collage;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    function options()
    {

        return $this->hasMany(options::class);
    }

    function collage()
    {
        return $this->belongsTo(Collage::class);
        
    }

}
