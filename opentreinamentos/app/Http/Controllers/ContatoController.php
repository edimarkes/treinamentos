<?php

namespace App\Http\Controllers;

use App\Mail\formulariocontato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function index(){
       
    }

    public function store(){
        
    }

    public function processaemail(Request $request){

        Mail::to('edimarkes@gmail.com')->send(new formulariocontato($request));
        
        return redirect('/formulariofaleconosco');

    }
}
