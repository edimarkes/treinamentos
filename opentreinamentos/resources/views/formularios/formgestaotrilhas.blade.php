@extends('layouts.about')
@section('title','Gestão | Trilhas')
@section('content')
<style>
     .boxLogin {
          padding: 5em 0;

     }

     .boxLogin .content {
          padding: 0.5em;
     }

     .login {
          width: 100%;
          overflow: hidden;
          margin: auto;
          display: inherit;
          background-color: #fff;
          border-radius: 4px;
          box-shadow: 1px 0px 3px 0px #cbcbcb;
     }

     .login h1 {
          text-align: center;
          font-family: 'open_sansregular';
          font-size: 1.5em;
          border-bottom: 1px #e9e9e9 solid;
          padding: 0.5em;
          background-color: #0085d5;
          color: #ffffff;
     }

     .login .padding {
          padding: 1.5em;
          float: left;
     }

     .login label {
          width: 100%;
          float: left;
          margin-bottom: 1em;
     }

     .login .campos {
          border-top: 1px transparent solid;
          border-left: 1px transparent solid;
          border-bottom: 1px #eaeaea solid;
          border-right: 1px transparent solid;
          color: #414141;
          font-family: 'open_sansregular';
          font-size: 0.9em;
          outline: none;
          padding: 0.5em 0em;
          transition: 0.4s;
     }

     .login .campos:focus {
          border-top: 1px transparent solid;
          border-left: 1px transparent solid;
          border-bottom: 1px #0085d5 solid;
          border-right: 1px transparent solid;
          color: #0085d5;
     }

     .login .btn {
          width: auto;
          float: left;
          padding: 0.4em 1.3em;
          font-family: 'open_sansregular';
          font-size: 1em;
          background-color: #0085d5;
          color: #fff;
          border: 0;
          border-radius: 4px;
          transition: 0.4s;
     }

     .login .btn:hover {
          background-color: #4c4c4c;
     }

     .login .linksForm {
          width: 100%;

          background-color: #f6f6f6;
          border-top: 1px #e9e9e9 solid;
          padding: 1em 1.5em;
          display: inline-block;
          transition: 0.4s;
     }

     .login .linksForm a {
          float: left;
          margin-bottom: 0.5em;
          text-decoration: none;
          font-size: 0.89em;
          font-family: 'open_sansregular';
          color: #868686;
          margin-right: 10px;
          border-right: 1px #d9d9d9 solid;
          padding-right: 10px;
          transition: 0.4s;
     }

     .login .linksForm a:last-child {
          border-right: 0;
          padding-right: 0px;
     }

     .login .linksForm a:hover {
          color: #ffa700;
     }

     /*Responsivo*/
     /*480PX BREAKPOINT*/
     @media (min-width:30em) {
          .login {
               width: 50%;
          }
     }

     /*768PX BREAKPOINT*/
     @media (min-width:48em) {
          .login {
               width: 35%;
          }

          .login .linksForm a {
               font-size: 0.9em;
          }
     }

     .boxLogin {
          display: flex;
          align-items: center;
          justify-content: center;

     }
     .tabelatrilhas {
          margin-left: 50px;
          margin-right: 20px;
     }
     .btnexcluir {
      margin-top: 30px;
    } 

     /*----//end-responsive design-----*/
</style>
<br>
<br>

<section class="boxLogin container">
     <div class="content">

          <form action="salvatrilhas" method="POST">
               @csrf
               <h1><i class="icon icon-key-1"></i> Cadastro de Trilhas</h1>
               <div class="padding">
                    <label>
                         <input type="text" class="campos" placeholder="Nome da trilha" name="nometrilha">
                    </label>
                    <label>
                         <input type="text" class="campos" placeholder="curso 1" name="curso1">
                    </label>
                    <label>
                         <input type="text" class="campos" placeholder="curso 2" name="curso2">
                    </label>
                    <label>
                         <input type="text" class="campos" placeholder="curso 3" name="curso3">
                    </label>
                    <label>
                         <input type="text" class="campos" placeholder="curso 4" name="curso4">
                    </label>
                    <label>
                         <input type="text" class="campos" placeholder="curso 5" name="curso5">
                    </label>
                    <label>
                         <input type="text" class="campos" placeholder="Valor R$" name="valor" required>
                    </label>
                    <input type="submit" class="btn" value="Salvar">

               </div><!--padding-->

          </form>
     </div>
</section><!--Login-->


<table id="tfhover" class="tftable tabelatrilhas">
     <tr>
          <th>Nome da Trilha</th>
         
          <th>Curso 1</th>
          <th>Curso 2</th>
          <th>Curso 3</th>
          <th>Curso 4</th>
          <th>Curso 5</th>
          <th>Valor</th>
          <th>Editar</th>
          <th>Excluir</th>
     </tr>
     @foreach($trilhas as $trilha)
     <tr>
          <td>{{$trilha->nometrilha}}</td>
          <td>{{$trilha->curso1}}</td>
          <td>{{$trilha->curso2}}</td>
          <td>{{$trilha->curso3}}</td>
          <td>{{$trilha->curso4}}</td>
          <td>{{$trilha->curso5}}</td>
          <td>{{$trilha->valor}}</td>
          <td><a href="/editartrilhas/{{$trilha->id}}" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon>Editar </a>
          </td>

          <td>
	<a href="/deletatrilha/{{$trilha->id}}"  class="btn btn-danger delete-btn btnexcluir" data-toggle="modal" data-target="#deletemodal{{$trilha->id}}" data-id="" aria-hidden="true"> <ion-icon name="trash-outline"></ion-icon> Excluir
	</a>
	<form action="/deletatrilha/{{$trilha->id}}" method="POST">
  {{method_field('delete')}}
  {{csrf_field()}}

<div class="modal fade" id="deletemodal{{$trilha->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Deseja Deletar a trilha {{$trilha->nometrilha}}?</p>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Deletar</button>
      </div>
    </div>
  </div>
</div>
</td>
     </form>


     </tr>
     @endforeach
</table>


@endsection