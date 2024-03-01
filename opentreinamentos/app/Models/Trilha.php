<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trilha extends Model
{
    use HasFactory;
    protected $table ='trilhas';
    protected $guarded = [];
    protected $fillable = [
        'nometrilha',
        'valor',
        'curso1',
        'curso2',
        'curso3',
        'curso4',
        'curso5',
      
     ];

}
