@extends('layouts.detalhesmain')
@section('title','Cadastro')
@section('content')
<br>
<br>

<div class="container">
	<div class="formcadastro">
	<h2>Cadastro de Aluno</h2>
	</div>
	<form action="/participantes" method="POST">		
		@csrf
      
    <div class="form-row">
		  <div class="form-group col-md-12">
        <label for="inputName">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required="required">
		</div>
    </div>
		

		<div class="form-row">

    <div class="form-group col-md-3">
      <label for="inputEmail">E-mail</label>
      <input type="text" class="form-control" id="email" placeholder="E-mail principal" name="email" required="required">
    </div>


    <div class="form-group col-md-3">
      <label for="inputFone">Telefone</label>
      <input type="text" step="any" class="form-control" id="telefone" maxlength="15" placeholder="Seu celular com ddd" name="telefone" required="required"  maxlength="14" OnKeyPress="formatar('(##)#####-####',this)">
    </div>
      <div class="form-group col-md-3">
      <label for="inputrg">RG</label>
      <input type="text" class="form-control" placeholder="Seu RG " id="rg" name="rg" >
    
    </div>
    <div class="form-group col-md-3">
      <label for="inputrg">CPF</label>
      <input type="text" class="form-control" placeholder="CPF " id="CPF" name="cpf"  maxlength="14" OnKeyPress="formatar('###.###.###-##',this)">
    
    </div>
    
    
    </div>
    



		<div class="form-row">
          <div class="form-group col-md-2">
       <label for="inputCep">Cep</label>
        <input type="text" class="form-control" id="cep"         
        name="cep" maxlength="9" OnKeyPress="formatar('#####-###',this)"
        required="required" placeholder="Cep">
        </div>

        <div class="form-group col-md-8">
      <label for="inputEndereco">Endereço</label>
      <input type="text" class="form-control" id="logradouro"  name="logradouro" required="required" placeholder="Endereço: Rua/Av">
    </div>

    <div class="form-group col-md-2">
      <label for="inputNumber">Número</label>
      <input type="text" class="form-control" id="numero" placeholder="numero" name="numero" required="required" placeholder="Número">
    </div>
          </div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputBairro">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro"  required="required" placeholder="bairro">
    </div>
    <div class="form-group col-md-3">
      <label for="inputComplemento">Complemento</label>
      <input type="text" class="form-control" id="complemento" name="complemento" placeholder="complemento">
     
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade" required="required" placeholder="Cidade">
     
    </div>
    <div class="form-group col-md-2">
      <label for="inputUf">Estado</label>
      <input type="text" class="form-control" id="estado" name="estado" required="required" placeholder="Estado / UF">
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

        <div class="form-group col-md-2">
        <input type="submit"  class="btn btn-primary" value="Cadastrar">
        </div>
      </div>  
  
  
 
    

     
    
    
  </div>
  
 
  
</form>
<br>
<br>


@endsection