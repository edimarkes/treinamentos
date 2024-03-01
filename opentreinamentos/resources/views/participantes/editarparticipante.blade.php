@extends('layouts.detalhesmain')

@section('title','Editar Cadastro do Participante')      

 

@section('content')



<div id="events-container" class="col-md-8 offset-md-3">
     <br>
	<h2>Editando Participante</h2>

	<form action="/participantes/update/{{$participante->id}}" method="POST">		
		@csrf
          @method('PUT')

		<div class="form-group">
        <label for="inputName">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$participante->nome}}" >
		</div>
		

		<div class="form-row">

    <div class="form-group col-md-3">
      <label for="inputEmail">E-mail</label>
      <input type="text" class="form-control" id="email" value="{{$participante->email}}" name="email" required="required">
    </div>


    <div class="form-group col-md-3">
      <label for="inputFone">Telefone</label>
      <input type="text" step="any" class="form-control" id="telefone" maxlength="15" value="{{$participante->telefone}}"  name="telefone" required="required">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCpf">RG</label>
      <input type="text" class="form-control" value="{{$participante->rg}}"  id="rg" name="rg" >
    
    </div>
      <div class="form-group col-md-3">
      <label for="inputCpf">CPF</label>
      <input type="text" class="form-control" value="{{$participante->cpf}}"  id="cpf" name="cpf" disabled >
    
    </div>
    </div>
    



		<div class="form-row">
          <div class="form-group col-md-2">
       <label for="inputCep">Cep</label>
        <input type="text" class="form-control" id="cep" value="{{$participante->cep}}"  name="cep" required="required">
        </div>

        <div class="form-group col-md-8">
      <label for="inputEndereco">Endereço</label>
      <input type="text" class="form-control" id="logradouro"     value="{{$participante->logradouro}}" name="logradouro" >
    </div>

    <div class="form-group col-md-2">
      <label for="inputNumber">Número</label>
      <input type="text" class="form-control" id="numero" placeholder="numero"  value="{{$participante->numero}}" name="numero">
    </div>
          </div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputBairro">Bairro</label>
      <input type="text" class="form-control" id="bairro"  value="{{$participante->bairro}}" name="bairro" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputComplemento">Complemento</label>
      <input type="text" class="form-control" id="complemento"  value="{{$participante->complemento}}" name="complemento">
     
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="cidade"  value="{{$participante->cidade}}" name="cidade" >
     
    </div>
    <div class="form-group col-md-2">
      <label for="inputUf">Estado</label>
      <input type="text" class="form-control" id="estado"  value="{{$participante->estado}}" name="estado">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputPassword">Digite a Senha Atual ou Nova Senha</label>
  <input type="password" class="form-control" id="password"   name="password" required >
        </div>
        <div class="form-group col-md-6">
  <label for="inputConfirmPassword">Repita a Senha Atual ou a Nova Senha</label>
  <input type="password" class="form-control" id="confirmapassword" name="confirmapassword" required>
        </div>


  
  
  
    <br>

     
     &nbsp;&nbsp;<input type="submit"  class="btn btn-primary" value="Alterar"> 
    
  </div>
  
 
  
</form>


@endsection  
<br>


		
        
        
	

		



	




