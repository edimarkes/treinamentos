@extends('layouts.about')
@section('title','Lista de Participantes')
@section('content')
<style>
     .table {

          width: 100%;
     }

     table.redTable {
          border: 2px solid #A40808;
          background-color: #EEE7DB;
          width: 100%;
          border-collapse: collapse;
     }

     table.redTable td,
     table.redTable th {
          border: 1px solid #AAAAAA;
         
          
     }

     table.redTable tbody td {
          font-size: 16px;
          text-align: center;
         justify-content: center;
   
     }

     table.redTable tr:nth-child(even) {
          background: #F5C8BF;
     }

     table.redTable thead {
          background: #A40808;
     }

     table.redTable thead th {
          font-size: 19px;
          font-weight: bold;
          color: #FFFFFF;
          border-left: 2px solid #A40808;
          text-align: center;
     }

     table.redTable thead th:first-child {
          border-left: none;
     }
     .btnexcluir {
      margin-top: 30px;
    }
     
</style>
<h1>Lista Geral de Alunos</h1>
<br>

<div class="table">
<table class="redTable" id="myTable">
<thead>
<tr>
<th style="text-align:center;">Nível</th>
<th style="text-align:center;"> ID ALuno</th>
<th>Nome</th>
<th>E-mail</th>
<th>CPF</th>
<th>Editar</th>
<th>Excluir</th>
</tr>
</thead>

<tbody>
@foreach($buscando as $participante)
@if($participante->nivelusuario == 3)
<tr>
<td style="text-align:center;">{{$participante->nivelusuario}}</td>
<td style="text-align:center;">{{$participante->id}}</td>
<td>{{$participante->nome}}</td>
<td>{{$participante->email}}</td>
<td>{{$participante->cpf}}</td>
<td><a href="/editarparticipante/{{$participante->id}}" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon>Editar </a></td>
<td> 
<a href="/participante/{{$participante->id}}"  class="btn btn-danger delete-btn btnexcluir" data-toggle="modal" data-target="#deletemodal{{$participante->id}}" data-id="" aria-hidden="true"> <ion-icon name="trash-outline"></ion-icon> Excluir
	</a>
	<form action="/eventos/{{$participante->id}}" method="POST">
	{{method_field('delete')}}
  	{{csrf_field()}}
	  <div class="modal fade" id="deletemodal{{$participante->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Deseja Deletar o cadastro do(a) aluno(a) {{$participante->nome}}?</p>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Deletar</button>
      </div>
    </div>
  </div>
</div>
@endif
</form>
	

	
	

</td>
</tr>
@endforeach
</tbody>
</table>
</div>

  @endsection