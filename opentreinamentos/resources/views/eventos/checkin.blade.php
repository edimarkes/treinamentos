@extends('layouts.about')
@section('title','Checkin')
@section('content')

<style>
     .table {

          width: 100%;
     }

     table.redTable {
          border: 2px solid #A40808;
          background-color: #EEE7DB;
          width: 100%;
          border-collapse: collapse;
     }

     table.redTable td,
     table.redTable th {
          border: 1px solid #AAAAAA;
         
          
     }

     table.redTable tbody td {
          font-size: 16px;
          text-align: center;
         justify-content: center;
   
     }

     table.redTable tr:nth-child(even) {
          background: #F5C8BF;
     }

     table.redTable thead {
          background: #A40808;
     }

     table.redTable thead th {
          font-size: 19px;
          font-weight: bold;
          color: #FFFFFF;
          border-left: 2px solid #A40808;
          text-align: center;
     }

     table.redTable thead th:first-child {
          border-left: none;
     }

    .btnexcluir {
      margin-top: 30px;
    } 
</style>

<input type="submit" class="form-control" value="Área  Checkin">




     <div id="events-container-programador" class="col-md-12">
          <br>
          <div id="tabela-info-gestor">
               <table id="myTable" class="display" style="width:100%">
                    <thead>
                         <tr>
                             
                               <th>Id Evento</th>
                              <th>Id Aluno</th>
                              <th>Id Curso</th>
                              <th scope="col">Nome Cliente</th>
                              <th scope="col">Curso</th>
                              <th scope="col">Data Inicial</th>
                              <th scope="col">Data Final</th>
                              <th scope="col">Período</th>
                              <th scope="col">Formato</th>
                              <th scope="col">Valor R$</th>
                              <th>Data Contratação</th>
                              <th>C.H.</th>
                              <th scope="col">Status</th>
                              <th scope="col">Mudar Status</th>
                              <th scope="col">Link</th>
                              <th scope="col">Excluir</th>



                         </tr>
                    </thead>
                    <tbody>
                         @foreach($consulta as $dadosaluno)
                         <tr>
                              <td><button><a href="/checkinpainelaluno/{{$dadosaluno->id}}" target="_blank"> {{$dadosaluno->id}}</a></button></td>
                              <td> {{$dadosaluno->user_id}}</td>
                              <td> {{$dadosaluno->evento_id}}</td>
                              <td>{{$dadosaluno->nomealuno}} </td>
                              <td> {{$dadosaluno->nomecurso}} </td>
                              <td>{{date('d/m/Y',strtotime($dadosaluno->datainicial))}}</td>
                              <td>{{date('d/m/Y',strtotime($dadosaluno->datainicial))}}</td>
                              <td>{{$dadosaluno->periodo}}</td>
                              <td>{{$dadosaluno->formato}}</td>
                              <td>R$ {{ number_format($dadosaluno->valorevento, 2, ',','.')}}</td>
                              <td>{{date('d/m/Y',strtotime($dadosaluno->created_at))}}</td>
                              <td>{{$dadosaluno->cargahoraria}} </td>
                              <td>{{$dadosaluno->status}}                            
                              </td>



                              <td>
                                   <a href="eventos/formstatuscheckin/{{$dadosaluno->id}}" class="btn btn-success" data-id="" aria-hidden="true" target="_blank"> <ion-icon name="bag-handle"></ion-icon> Alterar Status
                                   </a>

                              </td>
                              <td>
                                   <a href="" class="btn btn-success" data-id="" aria-hidden="true"> <ion-icon name="bag-handle"></ion-icon> Gerar Link
                                   </a>
                              </td>

                              <td>
                                   <a href="/deletareventocontratado/{{$dadosaluno->id}}" class="btn btn-danger delete-btn btnexcluir" data-toggle="modal" data-target="#deletemodal{{$dadosaluno->id}}" data-id="" aria-hidden="true"> <ion-icon name="trash-outline"></ion-icon> Excluir
                                   </a>
                                   <form action="/deletareventocontratado/{{$dadosaluno->id}}" method="POST">
                                        {{method_field('delete')}}
                                        {{csrf_field()}}


                                        <div class="modal fade" id="deletemodal{{$dadosaluno->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                       <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                 <span aria-hidden="true">&times;</span>
                                                            </button>
                                                       </div>
                                                       <div class="modal-body">
                                                            <p class="text-center">Deseja Deletar o curso de {{$dadosaluno->nomecurso}} do(a) aluno(a) {{$dadosaluno->nomealuno}}?</p>
                                                       </div>

                                                       <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        </form>
                              </td>


                         </tr>
                       


                         </td>
                         </tr>
                         @endforeach
                    </tbody>

               </table>
               <br>


          </div>

     </div>





     @endsection