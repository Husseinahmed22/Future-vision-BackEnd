<?php

namespace App\Model;

use App\model\Questions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collage extends Model
{
    protected $guarded = ['id'];

    protected $table = 'collages';

    protected $fillable = [ 'name' ];



    public function university()
    {
        return $this->belongsToMany(universities::class);
    }

    public function Question()
    {
        return $this->hasMany(Questions::class);

    }



}
