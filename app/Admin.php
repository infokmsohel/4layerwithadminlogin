<?php

namespace App;

use App\Notifications\AdminPasswordResetNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminPasswordResetNotification($token));
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
