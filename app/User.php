<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Passport\HasApiTokens;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{


    // protected $table = 'users';

    // public function collage()
    // {
    //     return $this->belongsTo(Collage::class);
    // }


     use HasApiTokens , Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'college_id',
        // 'uni_id',
        'firstname',
        'lastname',
        'email',
        'password',
        "gender",
        'img',
        "location",
        "birth",
        'department',
        "Philosophymark",
        "historymark",
        "psychologymark",
        "geologymark",
        "thirdlangmark",
        "arabicMark",
        "physicsMark",
        "mathMark",
        "chemistryMark",
        "englishMark",
        "totalPercentage",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected function setPasswordAttribute($password){
    //     $this->attributes['password'] = bcrypt($password);
    // }
}
