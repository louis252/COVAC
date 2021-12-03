<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class vaccination extends Model
{
    use HasFactory, Notifiable;
    
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'vaccinationID';

    protected $fillable = [
        'vaccinationID',
        'appointmentDate',
        'status',
        'remarks',
        'patientname',
        'centreName',
        'vaccineName',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
