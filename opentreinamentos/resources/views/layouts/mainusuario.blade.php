
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>@yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!-- Site Icons -->
      <link rel="shortcut icon" href="#" type="image/x-icon" />
      <link rel="apple-touch-icon" href="#" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/css/bootstrap.min.css" />
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="/css/pogo-slider.min.css" />
      <!-- Site CSS -->
      <link rel="stylesheet" href="/css/style.css" />
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="/css/responsive.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="/css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

        <script type="text/javascript">
    
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
    return document.getElementById( el );
}
window.onload = function(){
    id('telefone').onkeyup = function(){
        mascara( this, mtel );
    }
}
    
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   </head>

   @section('content')
   <body id="services" class="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
      <!-- LOADER -->
      <div id="preloader">
         <div class="loader">
            <img src="/images/loader.gif" alt="#" />
         </div>
      </div>
      <!-- END LOADER -->
      <div class="wrapper">
      <nav id="sidebar">
         <div class="menu_section">
            <ul>
               <li><a href=" /">Home</a></li>
               <li><a href="/office">Pacote Office</a></li>
               <li><a href="/programacao">Programação</a></li>
               <li><a href="/dados">Dados e BI</a></li>
               <li><a href="/apps">Desenvolvimento Móbile</a></li>
               <li><a href="/cursos">Cursos e Treinamentos</a></li>
               <li><a href="/outsourcing">Outsourcing</a></li>
               <li><a href="/trabalheaqui">Trabalhe Conosco</a></li>
               <li><a href="/contato">Contato</a></li>
               <li><a href="{{'/logoutusuario'}}">Sair</a></li>
              
               
            </ul>
         </div>
      </nav>
      <div id="content">
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a href=" /"><img src="/images/novologo.jpg" /></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img src="/images/menu_icon.png"></button>
                  </div>
               </div>
            </div>
         </header>
         <!-- End header -->




<main>
<div class="container-fluid">
   <div class ="row">
      @if(session('msg'))
      <p class="msg">{{session('msg')}}</p>
      @endif
   @yield('content')
</div>
</div>
</main>