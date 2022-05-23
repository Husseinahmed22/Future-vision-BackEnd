<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'exam_id',
        'collage_id',
        'question',
        'answers'
    ];
    public function exam(){
        return $this->belongsTo(Exam::class);
    }
}
