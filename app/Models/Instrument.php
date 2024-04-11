<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    //use HasFactory;
    protected $table = 'instruments'; 
    protected $fillable = [
        'instrument_id','instrument_name', 'available', 'last_update'
    ];
}
