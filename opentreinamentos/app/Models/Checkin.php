<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkin extends Model
{
    use HasFactory;
    protected $table ='checkins';
    protected $guarded = [];
    protected $fillable = [
        'nomecurso',
        'datainicial',
        'datafinal',
        'periodo',      
        'formato',
        'valorevento',
        'cargahoraria',
        'status',
        'evento_id',
        'user_id',
     ];

   

}
