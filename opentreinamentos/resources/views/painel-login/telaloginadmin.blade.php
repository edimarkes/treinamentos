@extends('layouts.mainembranco')
@section('title','Login | Admin')
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
            
	   <div class="cssFont_1" style="font-family:'Dancing Script', cursive">Login | Admin</div>
          
            <form class="form-signin" action="{{'/autenticaadmin'}}" method="POST">
                @csrf
               

              
			 <input type="email" id="inputEmail" class="form-control" placeholder="Usuário: infotreinamentos@usuario" name="email" required>

			 
			 <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="password" required>
                <br>
               
                <button class="btn" type="submit">Logar</button>
            </form>
            <!-- /form -->
            <a href="#" class="forgot-password">
                Esqueceu a Senha?
            </a>
		  
        </div>
        <!-- /card-container -->
    </div><!-- /container -->
    



    
@endsection