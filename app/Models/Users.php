<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    
    use HasFactory, Notifiable;
    
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'username',
        'password',
        'email',
        'fullName',
        'ICPassport',
        'staffID',
        'centreName',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

}