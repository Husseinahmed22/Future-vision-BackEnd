<?php

namespace App\Model;

use App\model\questions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collage extends Model
{
    public function question()
    {
        return $this->hasMany(questions::class);
    }

}
