<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class InorganicChemical extends Model
{
    protected $table = 'inorganic_chemicals'; 
    protected $fillable = [
        'chemical_id','chemical_name', 'quantity', 'last_update'
    ];
}
