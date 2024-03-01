@extends('layouts.main')

@section('title','Cursos Abertos')         
        

@section('content')

<div id="search-container" class="col-md-12">
     <h1>Buscar Eventos Abertas</h1>
     <form action="/eventos/eventosabertos" method="GET">
          <div>
            
        <input type="text" id="search"  class="form-control" name="search"   placeholder="Localize Eventos Específicos">
   <button class="btn btn-primary" id="button-procurar"  >Buscar</button>
         
          </div>
          
    
     </form>
</div>


<div id="eventos-container" class="col-md-12">


   @if($search)
     <h2>Buscando por: {{$search}}</h2>
   @else
     <h2 class="subtitle">Veja as turmas abertas</h2>
   @endif
     
     <div id="cards-container" class="row">
     
     @foreach($eventos as $evento)
     @if($evento->site == 1)
     <div class="card col-md-3">
          <img src="/imageseventos/{{$evento->imagemevento}}" alt="{{$evento->nomecurso}}">
          <div class="card-date">Inicio: {{date('d/m/Y',strtotime($evento->datainicial))}}  | Término:  {{date('d/m/Y',strtotime($evento->datafinal))}}</div>
          <h5 class="card-title">{{$evento->nomecurso}}</h5>
          <h5 class="card-valor">Valor R$<b> {{number_format($evento->valorevento,'2',',','.')}}</b></h5>
          <h5 class="card-cidade">Local: {{$evento->local}}</h5>
          <br>
          <h5 class="card-cidade">Formato: {{$evento->formato}}</h5>            
          <a href="/eventos/{{$evento->id}}" class="btn btn-primary">Saber mais</a>
     </div>
     @endif
     @endforeach
    

     @if(count($eventos)== 0 && $search)
     <p>Nenhum evento encontrado com {{ $search }}! <a href="/eventos/eventosabertos"> 
     <input class="btn btn-primary" value="Ver Eventos Disponíveis"></a></p>
     &nbsp;&nbsp;
     <p>Nos envie o curso ou treinamento que você deseja <u>
  <a href="/contato"> acessando aqui</a></u></p>

     
     @elseif(count($eventos) == 0)
     <p>Não há eventos abertos por enquanto</p>
     @endif


     </div>
     
</div>

@endsection
