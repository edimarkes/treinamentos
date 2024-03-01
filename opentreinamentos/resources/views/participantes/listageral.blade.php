@extends('layouts.about')

@section('title','Lista de Participantes')

@section('content')




<div id="events-container-programador" class="col-md-12">
<br>

  @if(count($buscando) == 0)
  <p>Não tem participante cadastrado ainda!</p>
  @endif

  <div id="tabela-info-programador">
  <table id="myTable" class="display" style="width:100%">

      <thead>
        <tr>
         
          <th>Nível</th>
         
          <th> ID ALuno</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>CPF</th>
          <th>Editar</th>
          <th>Excluir</th>

        </tr>

      </thead>



      <tbody>
        @foreach($buscando as $participante)
        @if($participante->nivelusuario == 3)
        <tr>
        <td>{{$participante->nivelusuario}}</td>
          <td>{{$participante->id}}</td>        
         
          <td>{{$participante->nome}}</td>
          <td>{{$participante->email}}</td>
          <td>{{$participante->cpf}}</td>

          <td><a href="/participantes/editarparticipante/{{$participante->id}}" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon>Editar </a></td>

          <td>

            <a href="/deletaparticipante/{{$participante->id}}" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deletemodal{{$participante->id}}" data-id="" aria-hidden="true"> <ion-icon name="trash-outline"></ion-icon> Excluir </a>
            @endif




            <form action="/deletaparticipante/{{$participante->id}}" method="POST">

              {{method_field('delete')}}
              {{csrf_field()}}

              <div class="modal fade" id="deletemodal{{$participante->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p class="text-center">Deseja Deletar o(a) Aluno(a): {{$participante->nome}}?</p>
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
    <br>


  </div>
  <div class="py-4">

   
    <br>
    <br>

  </div>
</div>

@endsection