<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrokenGlass extends Model
{
    protected $table = 'broken_glasses'; 
    protected $fillable = [
        'student_name','reg_no', 'date', 'recorded_person','description','amount_to_pay','compensation',
    ];
}
