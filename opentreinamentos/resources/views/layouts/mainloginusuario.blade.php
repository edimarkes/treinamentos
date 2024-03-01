
<!DOCTYPE html>
<html lang="pt-br">
   <!-- Basic -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Site Metas -->
      <title>@yield('title')</title>
      <meta name="viewport" content="">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="width=device-width,initial-scale=1">
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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
       $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  
</script>

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

   </head>

   
   <body id="services" class="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
      <!-- LOADER -->
      <div id="preloader">
         <div class="loader">
            <img src="/images/loader.gif" alt="#" />
         </div>
      </div>
      <!-- END LOADER -->
     
      </nav>
      <div id="content">
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a href=" /" class="textlogo"><img src="/images/logo.jpg" width="50px"/>Info | Treinamentos</a>
                     </div>
                  </div>
                  <div class="col-sm-2">
                    <nav>
                   
             <a href="/telaloginusuario">Usuario</a>
            
             <a href="/logoutusuario">Sair</a>
               

               <div class="animation start-home"></div>
               </nav>

                  </div>
               </div>
            </div>
         </header>
         <!-- End header -->





<div class="container-fluid">
   <div class ="row">
      @if(session('msg'))
      <p class="msg">{{session('msg')}}</p>
      @endif
   @yield('content')
</div>
</div>




       
<footer>

      <!-- Start Footer -->
     
         <footer class="footer-box">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Contato</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_1">
                         <p>Localidade<br><small>São Paulo - SP<br>CNPJ: 29.598.876/0001-63</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_2">
                        <p>Fale Conosco:<br><small>Whatsapp: (11) 97893-1669 <br>Fone: (11) 5834-2214<br>Segunda à Sexta<br>das 09:00 às 18:00 </small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                         <p>Email<br><small>contato@infotreinamentos.com.br<br></small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Mídias Sociais</p>
                         <p>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                         </p>
                     </div>
                  </div>
              
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">Desenvolvido por Info Treinamentos - 2023 </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="/js/jquery.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="/js/jquery.magnific-popup.min.js"></script>
      <script src="/js/jquery.pogo-slider.min.js"></script>
      <script src="/js/slider-index.js"></script>
      <script src="/js/smoothscroll.js"></script>
      <script src="/js/form-validator.min.js"></script>
      <script src="/js/contact-form-script.js"></script>
      <script src="/js/isotope.min.js"></script>
      <script src="/js/images-loded.min.js"></script>
      <script src="/js/custom.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function() {
           $('#sidebarCollapse').on('click', function() {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
           });
         });
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->


 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
   </body>
</html>

</footer>

</body>