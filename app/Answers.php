<?php

namespace App;

use App\Model\Collage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    
    public function option()
    {
        return $this->belongsTo(options::class);
    }

    public function collage()
    {
        return $this->belongsTo(Collage::class);
    }
}
