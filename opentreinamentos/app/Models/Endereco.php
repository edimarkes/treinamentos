<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'enderecos';
    protected $fillable = [
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'complemento',
        'cidade',      
        'estado',        
        'user_id',

       
     ];

     public function user(){
        return $this->belongsTo(User::class);
     }

     
}


