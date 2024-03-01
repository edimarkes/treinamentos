@extends('layouts.detalhesmain')
@section('title','Cursos Abertos') 
@section('content')

<!--
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
-->



<style>
/* Estilos comuns para os cards */

.secao4-div {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 10px;
  
   
}

.secao4-div-card {
    display: flex;
    flex-direction: column;
    align-items: left;
    width: calc(100% / 4 - 60px);
    margin: 10px;
    padding: 20px;
    box-shadow: 2px 2px 16px 0px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    background-color: white;
    transition: all 0.5s ease;
}



.secao4-div-card:hover {
    transform: scale(1.1);
    z-index: 1;
}

.secao4-div-card img {
    width: 35%;
    height: 35%;
    border-radius: 10px;
    
}

.secao4-div-card h5 {
   
    color: #333333;
    font-size: 14px;
   
}

/* Estilos para dispositivos móveis */
@media (max-width: 768px) {
    .secao4-div-card {
        width: 100%;
    }
}
/* SEARCH INICIO */

.form-control-borderless {
    border: none;
   
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%;
}
.containergeraleventos {
    width: 100%;
}

.secao4 {
    margin: 0;
    font-family: Helvetica, sans-serif;
  }

  .secao4-div {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 10px;


  }

  .secao4-div-card {
    display: flex;
    flex-direction: column;
    align-items: left;
    width: calc(100% / 4 - 60px);
    margin: 10px;
    padding: 20px;
    box-shadow: 2px 2px 16px 0px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    background-color: white;
    transition: all 0.5s ease;
  }



  .secao4-div-card:hover {
    transform: scale(1.1);
    z-index: 1;
  }

  .secao4-div-card img {
    width: 35%;
    height: auto;
  }

  .secao4-div-card h3 {

    color: #A62A2A;

  }
  .secao4-div-card img {
    width: 100px;
    height: 60px;
  }
  .secao4-div-card input {
    width: 500px;
}
  /* Estilos para dispositivos móveis */
  @media (max-width: 768px) {
    .secao4-div-card {
      width: 100%;
    }

    
  }
</style>

<div class="containergeraleventos">
<div class="container">
    <br/>
	<div class="row justify-content-center search">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" action="/turmasabertas" method="GET">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                    <i class="fa fa-search" aria-hidden="true"></i>                                   </div>
                                    <!--end of col-->
                                    <div class="col">
                                      
                         <input class=" form-control-lg form-control-borderless inputpequisa" type="search"  id="search" name="search" placeholder= "Pesquise o curso  aqui...">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-success" type="submit">Pesquisar</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>

<!-- Seção com cards -->
<section class="secao4" id="sobre">
    <div class="secao4-div">
        <!-- Card 1 -->
      @foreach($eventos as $evento)
     @if($evento->site == 1)
        <div class="secao4-div-card">
        <img class="image-card" src="/imageseventos/{{$evento->imagemevento}}" alt="{{$evento->nomecurso}}"> 
        <br>
        <p class="card-date">Inicio: {{date('d/m/Y',strtotime($evento->datainicial))}}  | Término:  {{date('d/m/Y',strtotime($evento->datafinal))}}</p>
          <p class="card-title">Curso: {{$evento->nomecurso}}</p>
          <p class="card-ch">Carga Horária: {{$evento->cargahoraria}}</p>
          <p class="card-valor">Valor R$<b> {{number_format($evento->valorevento,'2',',','.')}}</b></p>
          <p class="card-cidade">Local: {{$evento->local}}</Local:></p>
        
          <p class="card-periodo">Período: {{$evento->periodo}}</Período:></p>
        
          <p class="card-formato">*Formato:  {{$evento->formato}}</*Formato:></p> 
          <a href="/eventos/{{$evento->id}}" class="btn btn-success">Comprar</a>          
           
        </div>
        @endif
     @endforeach

     @if(count($eventos)== 0 && $search)
     <p>Nenhum curso encontrado com {{ $search }}! <a href="/turmasabertas"> 
     <input class="btn btn-info" value="Ver Eventos Disponíveis"></a></p>
     &nbsp;&nbsp;
     <p>Nos envie o curso ou treinamento que você deseja <u>
  <a href="/contato"> acessando aqui</a></u></p>
  @elseif(count($eventos) == 0)
     <p>Não há eventos abertos por enquanto</p>
     @endif
       
       
    </div>
</section>



<div class="py-4">
{{$eventos->render()}}
</div>



</div>


@endsection