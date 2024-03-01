@extends('layouts.about')

@section('title','Exclusão de Curso')
@section('content')



<input type="submit" class="form-control" value="Exclusão de Curso">


<div id="events-container-programador" class="col-md-12">
  <br>
<div id="tabela-info-gestor">
<table id="myTable" class="display" style="width:100%">
<thead>
<tr>

<th>#</th>
<th>Turmas</th>
<th>Nome Evento</th>
<th>Local</th>
<th>Inicio</th>
<th>Término</th>
<th>Dias Semana</th>

<th>Período</th>
<th>Valor</th>
<th>Formato</th>
<th>Site</th>

<th>Excluir</th>

</tr>
</thead>
<tbody>
	@foreach($eventos as $evento)
	@if($evento->site == 1)
	
	
<tr>
<td scropt="row">{{$loop->index + 1}}</td>
<td><button> <a href="/pesquisaturmas/{{$evento->id}}" target="_blank">{{$evento->id}} </a></button></td>
<td>{{$evento->nomecurso}}</td>
<td>{{$evento->local}}</td>
<td>{{date('d/m/Y',strtotime($evento->datainicial))}}</td>
<td>{{date('d/m/Y',strtotime($evento->datafinal))}}</td>
<td>{{$evento->diassemana}}</td>

<td>{{$evento->periodo}}</td>
<td>R$ {{ number_format($evento->valorevento, 2, ',','.')}}</td>
<td>{{$evento->formato}}</td>
<td>{{$evento->site}}</td>

<td> 
<a href="/evento/{{$evento->id}}"  class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deletemodal{{$evento->id}}" data-id="" aria-hidden="true"> <ion-icon name="trash-outline"></ion-icon> Excluir
	</a>
	<form action="/eventos/{{$evento->id}}" method="POST">
	  {{method_field('delete')}}
  	{{csrf_field()}}
	  <div class="modal fade" id="deletemodal{{$evento->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Deseja Deletar o curso de {{$evento->nomecurso}}?</p>
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
<br>


</div>

</div>





@endsection