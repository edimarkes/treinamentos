@extends('layouts.detalhesmain')
@section('title','Pesquisa Turma')
@section('content')
<style>
     .containertable {
          margin-top: 20px;
         width: 50%; 
         margin-left: 400px;   
 }

     .curso {
          font-size: 20px;
     }
     .info {
          color:#A62A2A;
     }
     .nomecurso {
          font-size: 20px;

     }
</style>
<div class="containertable">
     <div class="curso">

     
          <p class="nomecurso">Nome curso:<b> {{$evento->nomecurso}}<b></b> </p>      
     </div>
     <div>
        <b>Data Inicial: </b>  <span class="info">{{date('d/m/Y',strtotime($evento->datainicial))}}</span> |   <b>Data Final: </b> <span class="info"> {{date('d/m/Y',strtotime($evento->datafinal))}}</span> | <b>Período: </b> <span class="info">{{$evento->periodo}}</span> | <b>Dias: </b><span class="info"> {{$evento->diassemana}}</span>
     </div>
     <br>

     <div class="alunos">
          <table class="table">
               <tbody>
                    <tr>
                       
                         <th scope="col">#</th>
                         <th scope="col">Nome</th>
                         <th scope="col">CPF</th>

                    </tr>
                    @foreach($evento->alunos as $aluno)              
                   
                    <td scropt="row">{{$loop->index + 1}}</td>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->cpf}}</td>
               </tbody>
                    @endforeach
              
          </table>

     </div>
</div>


@endsection