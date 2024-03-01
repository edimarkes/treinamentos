@extends('layouts.mainembranco')

@section('title','Painel Usuário')
@section('content')
<style>
  .gestoreventos {
    color: #FFFFFF;
  }
</style>


<input type="submit" class="form-control" value="Área  Administrativa do Usuário">
<br>
<br>
<br>


<div id="button-gestoreventos" class="gestoreventos">
<a href="/eventos/eventosabertos" target="_blank">








<a href="/formtrabalheaqui" target="_blank">
<button class="btn btn-primary">Cadastra Programador</button>
</a>
</a>
<a href="/programadores/buscaprogramadores" target="_blank">
<button class="btn btn-primary">Programadores</button>
</a>
</a>
<a href="participantes/listageral" target="_blank">
<button class="btn btn-primary">Lista de Alunos</button>
</a>
</a>


<a href="/cadastrodealuno" target="_blank">
<button class="btn btn-primary">Cadastrar Aluno</button>
</a>
</a>






<a href="/logoutusuario">Sair

</a>
</a>



	
</div>


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