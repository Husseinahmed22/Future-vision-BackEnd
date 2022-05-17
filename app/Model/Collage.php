<?php

namespace App\Model;

use App\model\questions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collage extends Model
{

    // protected $table = 'collages';

    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }

    public function question()
    {
        return $this->hasMany(questions::class);
    }



}
