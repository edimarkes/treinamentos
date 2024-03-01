<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{

    public function naodisponivel(){      
        
        return view('/cursos/naodisponivel');       
 
    }
    public function excel(){

        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/excel',['cursosevento' => $cursosevento]);

    }
    public function powerbi(){

        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/powerbi',['cursosevento'=>$cursosevento]);
    
    


         
    }
    public function word(){

        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/word',['cursosevento'=> $cursosevento]);
      
       
    }

    public function pacoteoffice(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/pacoteoffice',['cursosevento'=> $cursosevento]);
    }

    public function excelavancado(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/excelavancado',['cursosevento'=> $cursosevento]);
    }
    public function powerpoint(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/powerpoint',['cursosevento'=> $cursosevento]);
    }

    public function logicadeprogramacao(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/logicadeprogramacao',['cursosevento'=> $cursosevento]);
    }

    public function frontend(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/frontend',['cursosevento'=> $cursosevento]);
    }

    public function csharp(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/csharp',['cursosevento'=> $cursosevento]);
    }

    public function java(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/java',['cursosevento'=> $cursosevento]);
    }

    public function javascript(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/javascript',['cursosevento'=> $cursosevento]);
    }

    public function php(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/php',['cursosevento'=> $cursosevento]);
    }

    public function python(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/python',['cursosevento'=> $cursosevento]);
    }

    public function laravel(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/laravel',['cursosevento'=> $cursosevento]);
    }

    public function sql(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/sql',['cursosevento'=> $cursosevento]);
    }

    public function dataanalytics(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/dataanalytics',['cursosevento'=> $cursosevento]);
    }

    public function cientistadedados(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/cientistadedados',['cursosevento'=> $cursosevento]);
    }

    public function kotlin(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/kotlin',['cursosevento'=> $cursosevento]);
    }

    public function swifit(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/swifit',['cursosevento'=> $cursosevento]);
    }

    public function flutter(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/flutter',['cursosevento'=> $cursosevento]);
    }

    public function project(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/project',['cursosevento'=> $cursosevento]);
    }

    public function redeseinfra(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/redeseinfra',['cursosevento'=> $cursosevento]);
    }

    public function marketingdigital(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/marketingdigital',['cursosevento'=> $cursosevento]);
    }
    public function arteedesing(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/arteedesing',['cursosevento'=> $cursosevento]);
    }
    public function testesunitarios(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/testesunitarios',['cursosevento'=> $cursosevento]);
    }

    public function contabilidade(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/contabilidade',['cursosevento'=> $cursosevento]);
    }

    public function gestaodenegocios(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/gestaodenegocios',['cursosevento'=> $cursosevento]);
    }

    public function games(){
        $cursosevento = Evento::all();
        return view('/cursos/cursosgerais/games',['cursosevento'=> $cursosevento]);
    }

    


public function ingles(){

    $cursosevento = Evento::all();
    return view('/cursos/cursosgerais/ingles',['cursosevento'=> $cursosevento]);
}

   
}
