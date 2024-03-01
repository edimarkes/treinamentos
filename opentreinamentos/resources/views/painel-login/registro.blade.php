@extends('layouts.detalhesmain')
@section('title','Tela de Registro')
@section('content')
<style>




.card-container.card {
    width: 360px;
    padding: 40px 40px;
    border-radius: 15px;
}



/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}



/*
 * Form styles
 */





.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
   
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.btn {
	background-color: #FFCC00;
	color:#F7F7F7;
	font-size: 20px;
	
}
.cssFont_1 {
font-family: 'Dancing Script', cursive;
font-size: 20px;
letter-spacing: 0px;
word-spacing: 0px;
color: #000000;
font-weight: bold;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: none;
padding: 0px 20px 20px 30px;
}



/*----//end-responsive design-----*/
</style>


              
<div class="container">
        <div class="card card-container"> 
            <div>
            
             <a href="/gestoreventos">Painel Gestor |</a>
             <a href="/logoutadmin">Sair</a>
            </div>   
            
	   <div class="cssFont_1" style="font-family:'Dancing Script', cursive">Registro de Usuário

</div>
          
            <form class="form-signin" action="registeruser" method="POST">
            @csrf
                
                <input type="number" id="inputEmail" class="form-control" 
			 name="nivelusuario" placeholder="Nível Usuário" required autofocus>

                <input type="text" id="inputNome" class="form-control" placeholder="Nome" name="nome" required>

			 <input type="text" id="inputEmail" class="form-control" placeholder="E-mail" name="email" required>

			 <input type="text" id="inputRg" name="rg" class="form-control" placeholder="RG" required>

			 <input type="text" id="inputCpf" name="cpf" class="form-control" placeholder="CPF"  maxlength="14" OnKeyPress="formatar('###.###.###-##',this)">

			 <input type="text" id="inputTelefone" class="form-control" placeholder="Telefone" maxlength="15" OnKeyPress="formatar('(##) #####-####',this)" required="required" name="telefone">

			 <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="password" required>
              <br>
              
               
                <button class="btn" type="submit">Cadastrar</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Esqueceu a Senha?
            </a>
		  
        </div>
        <!-- /card-container -->
    </div><!-- /container -->
    



    
@endsection