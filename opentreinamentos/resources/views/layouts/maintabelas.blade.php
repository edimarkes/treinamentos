<!DOCTYPE html>
<html lang="pt-br">
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
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/css/bootstrap.min.css" />
      
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

      <link rel="stylesheet" href="/assets/css/main.css" />






      


      <!-- DATA TABLE CSS -->
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
  <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<style>
   .titlelogo:hover{
   color: #f2849e !important;
}
.buttoncar{
   border-radius: 10px;
}
.cartoutline {
   margin-right: 10px;
}
</style>

   </head>
   <body class="is-preload">

      <!-- LOADER -->
      <div id="preloader">
         <div class="loader">
            <img src="/images/loader.gif" alt="#" />
         </div>
      </div>
      <!-- END LOADER -->

      <!-- Wrapper -->
         <div id="wrapper">

            <!-- Header -->
               <header id="header">
                  <div class="inner">

                     

                     <!-- Nav -->
                        <nav>
                           <ul>
                              <li><a href="#menu">Menu</a></li>
                           </ul>
                        </nav>

                  </div>
               </header>

            <!-- Menu -->
               <nav id="menu">
                  <h2 style="color:black">Menu</h2>
                  <ul>
                      <li><a href="/">Home</a></li>
                            <li><a href="/treinamentosincompany">Treinamentos InCompany</a></li>
                            <li><a href="/terceiriza">Outsourcing</a></li>
                            <li><a href="/trabalheconosco">Trabalhe Conosco</a></li>
                            <li><a href="/turmasabertas">Turmas Abertas</a></li>
                            <li><a href="/trilhas">Trilhas</a></li>
                            <li><a href="/contato">Fale Conosco</a></li>
                            <li><a href="/login">Login</a></li>
            
                  </ul>
               </nav>


        <div id="content">
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a href="/" class="logo">
                           <span> <img src="/images/logo.jpg" alt="" class="symbol" /></span>
                           <span class="titlelogo" style="color:black"><b>INFO | TREINAMENTOS</b></span>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                    

                  </div>
               </div>
            </div>
         </header>
         <!-- End header -->

         <main>
            <div class="container-fluid">
               <div class="row">
                  @if(session('msg'))
                  <p class="msg">{{session('msg')}}</p>
                  @endif
                  @yield('content')
               </div>
            </div>
         </main>
        
         
        
        
             
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
                        <p>Telefones<br><small>(11) 98498-6363<br>(11)96453-1664<br>De segunda à Sexta<br>08:00hs - 18:00hs</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                         <p>Email<br><small>contato@infotreinamentos.com.br</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Mídias Sociais</p>
                         <p>
                           <ul>
                              <li><a href="#"><img src="/images/facebook.png"></i></a></li>
                              <li><a href="#"><img src="/images/instagram.png"></a></li>
                            
                              <li><a href="#"><img src="/images/linkedin.png"></a></li>
                              <li><a href="#"><a href="#"><img src="/images/youtube.png"></a></li>
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
                     <p class="crp">© Copyrights 2023 Desenvolvido por Info | Treinamentos</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="/js/jquery.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="/js/custom.js"></script>
    
      

      <!-- Scripts -->
         <script src="/assets/js/browser.min.js"></script>
         <script src="/assets/js/breakpoints.min.js"></script>
         <script src="/assets/js/main.js"></script>

 <!-- Script DataTable -->

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
 <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap.js"></script>

 <script>           
  $('#myTable').DataTable({
      language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json'
      }
    });
  </script>
   </body>
</html>
