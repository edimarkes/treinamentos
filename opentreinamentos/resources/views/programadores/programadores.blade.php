@extends('layouts.main2')

@section('title','Detalhes Programador')



     
       
         
 

@section('content')


<div id="detalhes-programador" class="col-md-12">



<table class="redTable" id="tabela-programador">
<thead>
<tr>
<th>Nome:<td>{{$result->nome}}</td></th>
<tr>
  <tr>
<th>Endereço:<td>{{$result->logradouro}}, {{$result->numero}} - Bairro:{{$result->bairro}} - Cidade: {{$result->cidade}} - Estado:{{$result->estado}}</td></th>
<tr>
  <tr>
<th>Email:<td>{{$result->email}}</td></th>
<tr>
  <tr>
<th>Telefone:<td>{{$result->fone}}</td></th>
<tr>
    <tr>
<th>Nascimento:<td> {{date('d/m/Y',strtotime($result->datanascimento))}} </td></th>
<tr>
    <tr>
<th>Escolaridade:<td>{{$result->escolaridade}}</td></th>
<tr>
      <tr>
<th>Atuação:<td> {{$result->atuacao}}</td></th>
<tr>
        <tr>
<th>PJ e Freelance<td>PJ: {{$result->pj}} / Freelance: {{$result->freelance}}</td></th>
<tr>
      <tr>
        
<th>Conhecimento:<td>
@foreach($result->conhecimento as $conhece)
{{$conhece}} / 
@endforeach
</td></th>

<tr>
      <tr>

<th>Curriculo:<td> <a href="/download/{{$result->curriculo}}"> Download currículo de {{$result->nome}}</a></td></th>
<tr>
</tbody>
</table>
<br>
<div id="voltar"> 
<a href="/buscaprogramadores" class="btn btn-primary">Voltar</a>
</div>
<br>



@endsection