<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento_User extends Model
{
    use HasFactory;

    protected $table = 'evento_users';
    protected $guarded = [];
    protected $fillable = [
        'id',
        'evento_id',
        'user_id',      
         
    ];
    public function checkins(){
        return $this->hasMany('App\Models\Checkin','evento_id','user_id');
     }

   
     

 

 

   

   
   


    
        
      
  
   
     

     
           
       
    

    
}
