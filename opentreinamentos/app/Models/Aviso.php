<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory;
    protected $table ='avisos';
    protected $guarded = [];
    protected $fillable = [
        'notificacoes',
        'status',
        'dataabertura',
        
     ];
}
