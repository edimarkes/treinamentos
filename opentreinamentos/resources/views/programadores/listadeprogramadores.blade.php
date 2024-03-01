@extends('layouts.about')
@section('title','Lista de Programadores')
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
<h1>Lista de Programadores</h1>

<div id="events-container-programador" class="col-md-12">
  <br>
  

@if(count($buscandoprogramadores) == 0)
<p>Não tem programador cadastrado ainda!</p>
@endif


<table id="myTable" class="redTable" style="width:100%">
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>E-mail</th>
<th>Telefone</th>
<th>Cidade</th>
<th>Download Curriculo</th>
<th>Editar</th>
<th>Excluir</th>

</tr>

</thead>



<tbody>
@foreach($buscandoprogramadores as $busca)
<tr>

<div id="button-programadores">
<td> <a href="/programadores/detalhesprogramador/{{$busca->id}}" class="btn btn-primary">{{$busca->id}}</a></td>
</div>
<td>{{$busca->nome}}</td>
<td>{{$busca->email}}</td>
<td>{{$busca->fone}}</td>
<td>{{$busca->cidade}}</td>
<td><a href="/download/{{$busca->id}}"> Download</a></td>

<td><a href="/programadores/formeditaprogramador/{{$busca->id}}" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon>Editar  </a></td>

  <td>
 
  <a href="/deletaprogramador/{{$busca->id}}"  class="btn btn-danger delete-btn btnexcluir" data-toggle="modal" data-target="#deletemodal{{$busca->id}}" data-id="{{$busca->id}}"> <ion-icon name="trash-outline"></ion-icon> Excluir
  </a>
  



<form action="/deletaprogramador/{{$busca->id}}" method="POST">
  
 {{method_field('delete')}}
  {{csrf_field()}}

<div class="modal fade" id="deletemodal{{$busca->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Deseja Deletar o Programador {{$busca->nome}}?</p>
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
<br>


</div>
<div class="row">
 


</div>



@endsection