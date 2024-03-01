@extends('layouts.about')

@section('title','Eventos Encerrados')
@section('content')



<input type="submit" class="form-control" value="Curso Encerrados">
<div id="events-container-cursosencerrados" class="col-md-12">

<table id="myTable" class="display">
<thead>
<tr>
<th>Id</th>
<th>Título do Evento</th>
<th>Data Inicial</th>
<th>Data Final</th>
<th>Hora Inicial</th>
<th>Hora Final</th>
<th>Período</th>
<th>Valor</th>
<th>Formato</th>
<th>Site</th>
<th>Editar</th>
<th>Excluir</th>

</tr>
</thead>
<tbody>
	@foreach($eventos as $evento)
	@if($evento->site == 0)
	
	
<tr>
<td>{{$evento->id}}</td>
<td>{{$evento->nomecurso}}</td>
<td>{{date('d/m/Y',strtotime($evento->datainicial))}}</td>
<td>{{date('d/m/Y',strtotime($evento->datafinal))}}</td>
<td>{{date('H:i',strtotime($evento->horainicial))}}hs</td>
<td>{{date('H:i',strtotime($evento->horafinal))}}hs</td>
<td>{{$evento->periodo}}</td>
<td>R$ {{$evento->valorevento}}</td>
<td>{{$evento->formato}}</td>
<td>{{$evento->site}}</td>
<td><a href="/eventos/formeditareventos/{{$evento->id}}" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon>Editar  </a></td>
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
</div>



@endsection