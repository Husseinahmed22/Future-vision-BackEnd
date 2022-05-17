<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    public function question()
    {
        return $this->belongsTo(questions::class);
    }

    public function answer()
    {
        return $this->hasOne(answers::class);
    }
}
