@extends('layouts.about')
@section('title','Lista de Usuários')
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
      margin-top: 53px;
    } 
</style>
<h1>Lista de Usuários do Sistema</h1>
<br>

<div id="events-container-usuario" class="col-md-12">
<br>

@if(count($buscandousuario) == 0)
<p>Não tem Usuário cadastrado ainda!</p>
@endif

  <div id="tabela-info-programador">
  <table id="myTable" class="redTable" style="width:100%">
<thead>
<tr>

<th>Nível</th>
<th>Nome</th>
<th>E-mail </th>
<th>RG </th>
<th>CPF</th>
<th>TELEFONE</th>
<th>Editar</th>


<th>Excluir</th>



</tr>
</thead>

<tbody>
	@foreach($buscandousuario as $usuario)
  @if($usuario->nivelusuario == 1 OR $usuario->nivelusuario == 2)
<tr>

<td>{{$usuario->nivelusuario}}</td>
<td>{{$usuario->nome}}</td>
<td>{{$usuario->email}}</td>
<td>{{$usuario->rg}}</td> 
<td>{{$usuario->cpf}}</td> 
<td>{{$usuario->telefone}}</td>  
 

<td><a href="/usuarios/editarusuarios/{{$usuario->id}}" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon>Editar  </a></td>

	<td>
	<a href="/deletausuario/{{$usuario->id}}"  class="btn btn-danger delete-btn btnexcluir" data-toggle="modal" data-target="#deletemodal{{$usuario->id}}" data-id="" aria-hidden="true"> <ion-icon name="trash-outline"></ion-icon> Excluir
	</a>
  @endif 
	<form action="/deletausuario/{{$usuario->id}}" method="POST">
  {{method_field('delete')}}
  {{csrf_field()}}

<div class="modal fade" id="deletemodal{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Deseja Deletar o Usuário {{$usuario->nome}}?</p>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Deletar</button>
      </div>
    </div>
  </div>
</div>
</form>

	

@endforeach	


</td>
</tr>

</tbody>

</table>

@endsection