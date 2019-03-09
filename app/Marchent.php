<?php

namespace App;

use App\Notifications\MarchentPasswordResetNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Marchent extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guard = 'customer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MarchentPasswordResetNotification($token));
    }



    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
