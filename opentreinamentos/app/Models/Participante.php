<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Participante extends Model
{
   use HasApiTokens, HasFactory, Notifiable;
   protected $fillable = [
      'nome',
      'email',
      'telefone',
      'cpfparticipante',      
      'password',
      'endereco_id',
   ];
   public function eventos()
   {
      return $this->belongsToMany(Evento::class)->withTimestamps();
   }

  

   protected $hidden = [
      'password',
      'remember_token',
   ];
   protected $casts = [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
   ];


 
}
