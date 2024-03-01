@extends('layouts.mainparticipante')

@section('title','Dashboard')

@section('content')





<div class="nomeparticipante">
<h3>Olá {{auth()->user()->nome}}</h3>
</div>
<br>
<br>




</div>

<div class="md-10 offset-md1 dashboard-eventos-container">
     <div class="painel"><h1>Painel do Aluno</h1></div>
     
     <div class="vercursos">Está logado? Retorne aos cursos <a href="/turmasabertas" target="_blank"><u>AQUI</u></a> e efetive a compra | <a href="{{'/logoutlogado'}}">Sair</a>
     <br>
     Se necessário, faça alteração de seus dados<a href="/participantes/alteradados/{{auth()->user()->id}}"> AQUI </a>
</div>   
     
 





  
     
      
     <table class="table">
          <thead>
         
               <tr>
                   
                    <th scope ="col">#</th>
                    <th scope ="col">Nome Curso</th>
                    <th scope ="col">Data Inicial</th>
                    <th scope ="col">Data Final</th>
                    <th scope ="col">Período</th>
                    <th scope ="col">Formato</th>
                    <th scope ="col">Valor R$</th>
                    <th scope ="col">Status</th>
                    <th scope ="col">Ações</th>

               </tr>
          </thead>      
        
          <tbody>
        
         @if(count($eventos) == 0)
         <p class="textdashboard">Nenhum curso contratado por enquanto</p>
          @else
          @foreach($eventos as $evento)
          <form action="" method="POST">         
         
               <tr>
                    <td scropt="row">{{$loop-> index + 1}}</td>
                    <td><a href="/eventos/{{$evento->id}}">{{$evento->nomecurso}}</a>  </td>
                    <td>{{date('d/m/Y',strtotime($evento->datainicial))}}</td>
                    <td>{{date('d/m/Y',strtotime($evento->datafinal))}}</td>
                    <td>{{$evento->periodo}}</td>
                    <td>{{$evento->formato}}</td>
                    <td>{{ number_format($evento->valorevento, 2, ',','.')}}</td>
                    <td>Em Andamento</td>
                    <td>
                    <form action="/eventos/{{$evento->id}}" method="POST">
	                    @csrf
	                    @method('DELETE')
	

                         <a href="/eventos/{{$evento->id}}"  class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deletemodal{{$evento->id}}" data-id="" aria-hidden="true"> <ion-icon name="trash-outline"></ion-icon> Excluir
	</a>
	
</form>
                    </td>
                    
               </tr>

              
          </tbody>
          </form>
          @endforeach
          @endif
     </table>
   
    
    
  
   
    





</div>


@endsection