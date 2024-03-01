@extends('layouts.mainembranco')
@section('title','Contato')
@section('content')
<style>
   
/* register */


.tab-content>.tab-pane {
    display: block;
}

#myTabContent 
{
position: relative;
width: 100%;
height: 1000px;
z-index: 5;
    overflow: hidden;
    
}

    #myTabContent .tab-pane
    {
    position: absolute;
    top: 0;
    padding: 10px 40px;
    z-index: 1;
    opacity: 0;
    -webkit-transition: all linear 0.3s;
    -moz-transition: all linear 0.3s;
    -o-transition: all linear 0.3s;
    -ms-transition: all linear 0.3s;
    transition: all linear 0.3s;
    
}

#login,
.content-3 {
    -webkit-transform: translateX(-250px);
    -moz-transform: translateX(-250px);
    -o-transform: translateX(-250px);
    -ms-transform: translateX(-250px);
    transform: translateX(-250px);
    
}

#newuser,
.content-4 {
    -webkit-transform: translateX(250px);
    -moz-transform: translateX(250px);
    -o-transform: translateX(250px);
    -ms-transform: translateX(250px);
    transform: translateX(250px);
    
}



@keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}

@-moz-keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}

@-webkit-keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}

@-ms-keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}

@-o-keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}


.register {
    background: -webkit-linear-gradient(left,  #1143a6, #00c6ff);
    margin-top: 3%;
    padding: 3%;
    
}

.register-left {
    text-align: center;
    color: #fff;
    margin-top: 4%;
}

.register-left input {
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}

.register-right {
    background: #f8f9fa;
    border-top-left-radius: 15% 50%;
    border-bottom-left-radius: 15% 50%;
}

.register-left img {
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;
}

@-webkit-keyframes mover {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-20px);
    }
}

@keyframes mover {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-20px);
    }
}

.register-left p {
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}






.register .nav-tabs {
    margin-top: 1%;
    border: none;
    background: #0062cc;
    border-radius: 20px;
    width: 35%;
    float: right;
    
}
#myTab  .nav-item {
    padding: 5px 3px;
        text-align: center;
    display: block;
        margin: 0px 6px;
        
}
.register .nav-tabs .nav-link {
      padding: 10px 8px;
 
    color: #fff;
    font-size: 13px;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
    
}

.register .nav-tabs .nav-link:hover {
    border: none;
    
}

.register .nav-tabs .nav-link.active {
    color:  #1143a6;
    border: 1px solid  #1143a6;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
    
}

.register-heading {
    text-align: center;
    color:  #1143a6;
}

#login.active 
{
    
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
    z-index: 100;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    -webkit-transition: all ease-out 0.2s 0.1s;
    transition: all ease-out 0.2s 0.1s;

}
#newuser.active 
{
    
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
    z-index: 100;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    -webkit-transition: all ease-out 0.2s 0.1s;
    transition: all ease-out 0.2s 0.1s;
    

}
.wrapper {
    width: 100%;
    margin-left: 30px;
    margin-top: 50px;
    padding: 20px;
}
.container p{
    color: #fff;
}
.container h3{
    font-size: 30px;
}
.symbol{
    border-radius: 50px 50px;
}
</style>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <!-- login start -->
        

<div class="container register">
<div class="row">
<div class="col-md-3 register-left">
<img src="images/logo.jpg" alt="" class="symbol" />
<h3>Fale Conosco</h3>
<p>Após o envio da mensagem, aguarde o nosso retorno.</p>
</div>
<div class="col-md-9 register-right">
<div class="tab-content" id="myTabContent">

<div class="wrapper">
    <form method="POST" name="enviaformulario" action="/processaemail" class="ccform">
        @csrf
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" name="nome" type="text" placeholder="Seu Nome" reSquired>
    </div>
    <br>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
        <input class="ccformfield" name="email" type="email" placeholder="Seu E-mail" required>
    </div>
    <br>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
        <input class="ccformfield" name="telefone" type="text" placeholder="Seu Telefone com ddd">
    </div>
    <br>
     <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
        <select class="ccformfield" name="assunto" type="text" placeholder="Assunto" required>
          <option class="hidden"  selected disabled>Assunto de Interesse...</option>
                                   <option>Desejo fazer um curso</option>
                                   <option>Desejo fazer uma trilha</option>
                                  <option>Quero treinamento InCompany</option>
                                 <option>Outsourcing</option>
                                 <option>Desenvolvimento de projeto</option>
                                 <option>Outro Assunto</option>
                                
        </select>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
        <textarea class="ccformfield" name="mensagem" rows="8" placeholder="Mensagem" required></textarea>
    </div>
    <br>
    <div class="ccfield-prepend">
        <input class="ccbtn" name="enviaformulario" type="submit" value="Enviar">
    </div>
    </form>
</div>



  
</div>
</div>
</div>
</div>

@endsection