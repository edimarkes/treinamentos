@extends('layouts.detalhesmain')
@section('title','Editar Dados de Usuário')   

 

@section('content')



<div id="events-container" class="col-md-8 offset-md-3">
     <br>
	<h2>Alterar Dados de Usuário</h2>

	<form action="/usuarios/updateusuario/{{$usuario->id}}" method="POST">		
		@csrf
     @method('PUT')

     <div class="form-row">
		<div class="form-group col-md-2">
        <label for="inputName">Nivel Usuário:</label>
        <input type="text" class="form-control" id="nome" name="nivelusuario" value="{{$usuario->nivelusuario}}" >
		</div>
    <div class="form-group col-md-10">
        <label for="inputName">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$usuario->nome}}" >
		</div>
     </div>
		
           

		<div class="form-row">

    <div class="form-group col-md-3">
      <label for="inputEmail">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$usuario->email}}" >
    </div>


   
    <div class="form-group col-md-3">
      <label for="inputCpf">RG</label>
      <input type="text" class="form-control" value="{{$usuario->rg}}"  id="rg" name="rg" >
    
    </div>
      <div class="form-group col-md-3">
      <label for="inputCpf">CPF</label>
      <input type="text" class="form-control" id="cpf" name="cpf" value="{{$usuario->cpf}}" >
    
    </div>
    <div class="form-group col-md-3">
      <label for="inputFone">Telefone</label>
      <input type="text" step="any" class="form-control" id="telefone" maxlength="15" value="{{$usuario->telefone}}"  name="telefone" required="required">
    </div>
    </div>
    



	
   

  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputPassword">Necessário digitar  a senha atual ou alterar para uma nova*</label>
  <input type="password" class="form-control" id="password"   name="password" required="required" >
        </div>
        <div class="form-group col-md-6">
  <label for="inputConfirmPassword">Repita a senha do campo anterior*</label>
  <input type="password" class="form-control" id="confirmapassword" name="confirmapassword" required="required">
        </div>

        <div class="form-group col-md-12">
        <div> 
        *<b>Campos obrigatórios</b>
        </div>
        </div>
        
      
        
      </div>
  
  
  
    <br>

        
     <input type="submit"  class="btn btn-primary" value="Alterar dados">
     </form>

     
     <div class="form-group col-md-12">
        <p>Altere a imagem do painel fazendo upload de uma nova imagem:</p>
        </div>
        <div class="form-group col-md-6"> 
          
        <form action="/alteraimagemperfilusuario/{{$usuario->id}}" method="POST" enctype="multipart/form-data">	
          @csrf
          @method('PUT')	
     
    <span class="btn btn-success fileinputbutton">
			<input type="file" name="imagemusuario">
			<img src="/imagesusuarios/{{$usuario->imagemusuario}}" alt="{{$usuario->imagemusuario}}" class="img-preview" >
		</span>
    <br>

   
        </div>
        <input type="submit"  class="btn btn-primary" value="Alterar Imagem">
    
  </div> 





@endsection  
<br>