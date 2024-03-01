<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'nome',
        'email',
        'nivelusuario',
        'telefone',
        'rgparticipante',
        'cpfparticipante',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'cidade',
        'estado',
        'password',
        'imagemusuario',
        'evento_id',
        

       
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function eventos(){
        return $this->hasMany('App\Models\Evento');       
    }    
    
    public function endereco(){
        return $this->belongsTo(Endereco::class, 'user_id');
     }

       
         public function eventosCursos(){
            return $this->belongsToMany(Evento::class,'evento_users','user_id','evento_id');
        }

        public function eventosCheckin(){
            return $this->hasMany(Checkin::class);
        }

        

     

       

      
       
       


        

        

       

        

      

         

         
   
}
