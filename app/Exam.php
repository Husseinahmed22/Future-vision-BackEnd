<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
