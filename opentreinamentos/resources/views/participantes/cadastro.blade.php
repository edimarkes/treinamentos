@extends('layouts.main')

@section('title','Cadastro Participante')      

 

@section('content')



<div id="events-container" class="col-md-8 offset-md-3">
     <br>
	<h1>Participante</h1>

	<form action="/participantes" method="POST">		
		@csrf

		<div class="form-group">
        <label for="inputName">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required="required">
		</div>
		

		<div class="form-row">

    <div class="form-group col-md-3">
      <label for="inputEmail">E-mail</label>
      <input type="text" class="form-control" id="email" placeholder="E-mail principal" name="email" required="required">
    </div>


    <div class="form-group col-md-3">
      <label for="inputFone">Telefone</label>
      <input type="text" step="any" class="form-control" id="telefone" maxlength="15" placeholder="Seu celular com ddd" name="telefone" required="required">
    </div>
      <div class="form-group col-md-3">
      <label for="inputCpf">RG</label>
      <input type="text" class="form-control" placeholder="Seu RG " id="rg" name="rg" >
    
    </div>
    <div class="form-group col-md-3">
      <label for="inputCpf">CPF</label>
      <input type="text" class="form-control" placeholder="cpf" id="cpf" onkeypress="$(this).mask('000.000.000-00');" name="cpf" >
    
    </div>
    
    
    </div>
    



		<div class="form-row">
          <div class="form-group col-md-2">
       <label for="inputCep">Cep</label>
        <input type="text" class="form-control" id="cep" name="cep" required="required">
        </div>

        <div class="form-group col-md-8">
      <label for="inputEndereco">Endereço</label>
      <input type="text" class="form-control" id="logradouro"  name="logradouro" required="required">
    </div>

    <div class="form-group col-md-2">
      <label for="inputNumber">Número</label>
      <input type="text" class="form-control" id="numero" placeholder="numero" name="numero">
    </div>
          </div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputBairro">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro"  required="required">
    </div>
    <div class="form-group col-md-3">
      <label for="inputComplemento">Complemento</label>
      <input type="text" class="form-control" id="complemento" name="complemento">
     
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade" required="required">
     
    </div>
    <div class="form-group col-md-2">
      <label for="inputUf">Estado</label>
      <input type="text" class="form-control" id="estado" name="estado" required="required">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputPassword">Senha</label>
  <input type="password" class="form-control" id="password" name="password" required="required">
        </div>
        <div class="form-group col-md-6">
  <label for="inputConfirmPassword">Confirme a Senha</label>
  <input type="password" class="form-control" id="confirmapassword" name="confirmapassword" required="required">
        </div>
      </div>
  
  
  
    <br>

     
     <input type="submit"  class="btn btn-primary" value="Cadastrar"> 
    
  </div>
  
 
  
</form>


@endsection  
<br>


		
        
        
	

		



	




