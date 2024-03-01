@extends('layouts.main')
@section('title','Checkin Painel Aluno')
@section('content')

<style>
     .gestoreventos {
          width: 100%;
     }
</style>

<input type="submit" class="form-control" value="Área Checkin Painel do Aluno">


<div id="button-gestoreventos" class="gestoreventos">


     <div id="events-container-programador" class="col-md-12">
          <br>
          <div id="tabela-info-gestor">
               <table id="myTable" class="display" style="width:100%">
                    <thead>
                         <tr>

                              
                              <th scope="col">Id  Aluno</th>
                              <th scope="col">Id Curso</th>
                             
                             
                             
                              <th scope="col">Excluir</th>



                         </tr>
                    </thead>
                    <tbody>
                  

                         
                         <tr>

                         @if($eventos)
                        
                         <td>{{$eventos->user_id}} </td>
                         <td>{{$eventos->evento_id}} </td>
                         @else
                         
                         <p>Nenhum Checkout Contratado</p>
                         @endif

                         
                         
                        

                        
                        
                        
                        
                         <td>
                              <a href="/deletarcheckinpainel/{{$eventos->id}}" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deletemodal{{$eventos->id}}" data-id="" aria-hidden="true"> <ion-icon name="trash-outline"></ion-icon> Excluir
                                   </a>
                                   <form action="/deletarcheckinpainel/{{$eventos->id}}" method="POST">
                                        {{method_field('delete')}}
                                        {{csrf_field()}}


                                        <div class="modal fade" id="deletemodal{{$eventos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                       <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                 <span aria-hidden="true">&times;</span>
                                                            </button>
                                                       </div>
                                                       <div class="modal-body">
                                                            <p class="text-center">Deseja Deletar esse curso do painel do(a) aluno(a)?</p>
                                                       </div>

                                                       <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                              </td>


                         </tr>
                         </form>


                         </td>
                         </tr>
                    </tbody>

               </table>
               <br>


          </div>

     </div>





     @endsection
