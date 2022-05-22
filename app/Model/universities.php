<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class universities extends Model
{

    protected $table = 'universities';

    protected $fillable = [
        'name',
        'location',
        'university_image',
    ];

    public function collage()
    {
        return $this->belongsToMany(Collage::class);
    }
}
