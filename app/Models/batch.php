<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class batch extends Model
{
    use HasFactory, Notifiable;
    
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'batchNo',
        'expiryDate',
        'quantityAvailable',
        'quantityAdministered',
        'vaccineID',
        'centreName',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
