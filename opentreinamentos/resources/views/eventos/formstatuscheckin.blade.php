@extends('layouts.detalhesmain')
@section('title','Editar Status Checkin')
@section('content')



<div id="events-container" class="col-md-8 offset-md-3">
     <br>
     <h2>Editar Status Checkin</h2>




     <div id="button-gestoreventos" class="gestoreventos">


          <div id="events-container-programador" class="col-md-12">
               <br>
               <div id="tabela-info-gestor">
                    <table class="redTable">
                         <thead>
                              <tr>

                                   <th scope="col">Aluno</th>
                                   <th scope="col">Curso</th>
                                   <th scope="col">Data Inicial</th>
                                   <th scope="col">Data Final</th>
                                   <th scope="col">Período</th>
                                   <th scope="col">Formato</th>
                                   <th scope="col">Valor R$</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Mudar Status</th>




                              </tr>
                         </thead>
                         <tbody>




                              <tr>
                                   <td>{{$evento->nomealuno}} </td>
                                   <td> {{$evento->nomecurso}} </td>
                                   <td>{{date('d/m/Y',strtotime($evento->datainicial))}}</td>
                                   <td>{{date('d/m/Y',strtotime($evento->datainicial))}}</td>
                                   <td>{{$evento->periodo}}</td>
                                   <td>{{$evento->formato}}</td>
                                   <td>R$ {{ number_format($evento->valorevento, 2, ',','.')}}</td>
                                   <td width="16%">
                                        <div class="form-group">
    <form action="/checkin/update/{{$evento->id}}" method="POST">
     @csrf
      @method('PUT')
       <select name="status" id="" class="form-control" required="required">
        <option value="{{$evento->status}}">{{$evento->status}}</option>
        <option value="Em Andamento">Em Andamento</option>
          <option value="Pré reserva">Pré Reserva</option>

         <option value="Aguardando Pagamento">Aguardando Pagamento</option>
          <option value="Pago">Pago</option>
           <option value="Desistiu">Desistiu</option>
     </select>
                                        </div>
                                   </td>



                                   <td width="13%">
                                        <input type="submit" class="btn btn-primary" value="Alterar Status ">

                                   </td>

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









</div>




@endsection