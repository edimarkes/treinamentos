<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'cep',
        'logradouro',
        'cidade',      
        'numero',
        'bairro',
        'complemento',
        'estado',
        'rg',
        'cpf',
        'email',
        'fone',
        'escolaridade',
        'experiencia',
        'datanascimento',
        'pj',
        'freelance',
        'profissional',
        'conhecimento',        
        'curriculo',
     ]; 

     protected $casts = [
        'conhecimento' => 'array'
     ];
}

