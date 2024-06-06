<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'DOB',
        'Travelsname',
        'Accountno',
        'Ifsccode',
        'Busname',
        'Busno',
        'Seats'
        
    ];
}
