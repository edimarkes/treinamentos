@extends('layouts.about')
@section('title','Notificações')
@section('content')
<style>

.padding {
  padding: 40px;
}

.no-padding {
  padding: 0;
  margin: 0;
}

.border-right {
  border-right: 1px solid #ccc;
}

.badge {
  margin-left: 5px;
  background-color: #5bc0de;
}

.badge a {
  color: #fff;
}


.limpar,
.enviar {
  float: right;
  margin: 20px 5px 0 0;
}

.enviar {
  margin: 20px 0 0 0;
  margin-right: 20px;
}
.btnexcluir {
     margin-top: 20px;
}
</style>
<div class="container">
		<h3>Formulário de notificações</h3>
		<div id="panel" class="panel panel-default no-padding" >
			<div class="panel-body no-padding">
				<form role="form" class="form-horizontal" action="cadastranotificacao" method="POST">
                         @csrf
					<div class="row-fluid">
						<div id="colImg" class="col-md-2 col-sm-2 col-xs-12 col-img">
							<!-- Background image -->
						</div>
						<div class="col-md-5 col-sm-5 col-xs-12  padding border-right">
							<p class="lead">Data e Status</p>
							<label label-default="" for="">Data 
							<div class="row">
								<div class="col-md-12">
					<input type="date" class="form-control" name="dataabertura">
								</div>
								
							</div>
							<label label-default="" for="">Status</label>
							<div class="row">
								
                                   <div class="col-md-12">
									<input type="number" class="form-control" name="status">
								</div>
							</div>
							
							<div class="row">
                                  
							</div>
							
								
								
							</div>
						</div>
						
						<div class="col-md-5 col-sm-5 col-xs-12  padding">
							<p class="lead">Notificação</p>
							<div class="row">
								<div class="col-md-12">
									<label label-default="" for="">Texto</label>
						<textarea type="text" class="form-control" name="notificacoes"> </textarea>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-6">
									
								</div>
								<div class="col-md-6">
									
								</div>
							</div>
							
								</div>
							</div>
							<div class="row-fluid">
								<button type="submit" class="btn btn-primary enviar">Enviar</button>
								<button class="btn btn-default limpar" type="reset">Limpar</button>
						
</form>
			</div>
		</div>
	</div>
     
     <!-- End of .container -->
</div>   
<br>

<div id="tabela-info-programador">
  <table id="myTable" class="redTable" style="width:100%">
<thead>
<tr>

<th>#</th>
<th>Notificação</th>
<th>Data Abertura</th>
<th>Status </th>
<th>Editar </th>
<th>Excluit</th>
</tr>
</thead>

<tbody>
@foreach($avisos as $notificacoes)
 
  
<tr>

<td scropt="row">{{$loop->index + 1}}</td>
<td>{{$notificacoes->notificacoes}}</td>
<td>{{date('d/m/Y',strtotime($notificacoes->dataabertura))}}</td>
<td>{{$notificacoes->status}}</td>


<td><a href="/editanotificacao/{{$notificacoes->id}}" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon>Editar  </a></td>

	<td>
	<a href="/deletanotificacao/{{$notificacoes->id}}"  class="btn btn-danger delete-btn btnexcluir" data-toggle="modal" data-target="#deletemodal{{$notificacoes->id}}" data-id="" aria-hidden="true"> <ion-icon name="trash-outline"></ion-icon> Excluir
	</a>
  
	<form action="/deletanotificacao/{{$notificacoes->id}}" method="POST">
  {{method_field('delete')}}
  {{csrf_field()}}

<div class="modal fade" id="deletemodal{{$notificacoes->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Deseja Deletar essa notificação?</p>
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