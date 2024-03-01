<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $table ='eventos';
    protected $casts=[
        'itensevento'=>'array'
    ];

    protected $guarded = [];

    protected $fillable =[
        'nomecurso',
        'local',
        'valorevento',
        'periodo',
        'datainicial',
        'datafinal',
        'horainicial',
        'horafinal',
        'diassemana',
        'formato',
        'site',
        'descricao',
        'itensevento',        
        'imagemevento',
        'status_pagamento',
        

    ];
 

   
    public function alunos(){
        return $this->belongsToMany(User::class,'evento_users','evento_id','user_id');
      
     }

 

    
}
