@extends('layouts.main')
@section('title','Altera | Trilha')
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

     /*----//end-responsive design-----*/
</style>
<br>
<br>




<div id="events-container" class="col-md-8 offset-md-3">
     <br>
     <h1>Alterar Trilha</h1>

     <form action="/alteratrilha/{{$trilha->id}}" method="POST">
           @csrf
          @method('PUT')          

          <div class="form-group col-md-6">
               <label for="nometrilha">Nome da Trilha</label>
               <input type="text" class="form-control" id="nometrilha" name="nometrilha" value="{{$trilha->nometrilha}}">

          </div>
          <div class="form-group col-md-6">
               <label for="nometrilha">Curso 1</label>
               <input type="text" class="form-control" id="curso1" name="curso1" value="{{$trilha->curso1}}">

          </div>
          <div class="form-group col-md-6">
               <label for="nometrilha">Curso 2</label>
               <input type="text" class="form-control" id="curso2" name="curso2" value="{{$trilha->curso2}}">

          </div>
          <div class="form-group col-md-6">
               <label for="nometrilha">Curso 3</label>
               <input type="text" class="form-control" id="curso3" name="curso3" value="{{$trilha->curso3}}">

          </div>
          <div class="form-group col-md-6">
               <label for="nometrilha">Curso 4</label>
               <input type="text" class="form-control" id="curso4" name="curso4" value="{{$trilha->curso4}}">

          </div>
          <div class="form-group col-md-6">
               <label for="nometrilha">Curso 5</label>
               <input type="text" class="form-control" id="curso5" name="curso5" value="{{$trilha->curso5}}">

          </div>
          <div class="form-group col-md-6">
               <label for="valor">Valor</label>
               <input type="text" class="form-control" id="valor"  value="{{$trilha->valor}}" name="valor">
          </div>
          <div class="form-group col-md-2">
          <div>
          <input type="submit"  class="btn btn-primary" value="Alterar">
          </div>
          </div>     
     </form>
</div>














@endsection