<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Aluno extends Authenticatable
{
    use HasFactory;

    protected $table = "checkins";
    protected $fillable = [
        'nomealuno',
        'nomecurso',
        'datainicial',
        'datafinal',
        'periodo',
        'formato',       
        'valorevento',
        'status',
        'evento_id',
        'user_id',
        
        
     ];
     protected $hidden = [
        'password',
        'remember_token',
     ];
     protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
     ];
}
