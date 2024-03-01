@extends('layouts.main')
@section('title','Info | Treinamentos')
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
</style>
<br>
<br>

<div class="container">
<h1>Alterar Notificação</h1>
<form role="form"  action="/updatenotificacao/{{$aviso->id}}" method="POST">
                    @csrf
		          @method('PUT')<div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
    <label for="floatingInputGrid">Status</label>
      <input type="text" class="form-control" id="floatingInputGrid"  value="{{$aviso->status}}">
     
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
     
    <label for="floatingInputGrid">Data Abertura</label>
    <input type="date" class="form-control" id="floatingInputGrid"  value="{{$aviso->dataabertura}}">
      
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
     
    <label for="floatingInputGrid">Notificacao</label>
    <input type="text" name="notificacoes" class="form-control" id="floatingInputGrid"  value="{{$aviso->notificacoes}}">
      
    </div>
    <button class="btn btn-success enviar">Alterar</button>
  </div>
</form>
</div>

</div>  
 
<br>


@endsection