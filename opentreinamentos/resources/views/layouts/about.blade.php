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
      <!-- Site Icons -->
      <link rel="shortcut icon" href="#" type="image/x-icon" />
      <link rel="apple-touch-icon" href="#" />
      <!-- Bootstrap CSS -->
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="css/pogo-slider.min.css" />
      <!-- Site CSS -->
      <link rel="stylesheet" href="css/style.css" />
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <link rel="stylesheet" href="assets/css/main2.css" />


      <style>
   table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}


/* general styling */
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}

.titlelogo:hover{
   color: #f2849e !important;
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   </head>
   <body class="is-preload">

      <!-- LOADER -->
      <div id="preloader">
         <div class="loader">
            <img src="images/loader.gif" alt="#" />
         </div>
      </div>
      <!-- END LOADER -->

      <!-- Wrapper -->
         <div id="wrapper">

            <!-- Header -->
               <header id="header">
                  <div class="inner">

                     <!-- Logo -->
                         <div class="logo_main">
                        <a href="/" class="">
                           <span> <img src="images/logo.jpg" alt="" class="symbol" /></span>
                            <span class="titlelogo" style="color:black"><b>INFO | TREINAMENTOS</b></span>
                        </a>
                     </div>

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
                  <h2 style="color: black;">Menu</h2>
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
                           <li><a href="#"><img src="images/facebook.png"></i></a></li>
                              <li><a href="#"><img src="images/instagram.png"></a></li>
                            
                              <li><a href="#"><img src="images/linkedin.png"></a></li>
                              <li><a href="#"><a href="#"><img src="images/youtube.png"></a></li>      
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
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/slider-index.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
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


      <!-- Scripts -->
         <script src="/assets/js/jquery.min.js"></script>
         <script src="/assets/js/browser.min.js"></script>
         <script src="/assets/js/breakpoints.min.js"></script>
         <script src="/assets/js/util.js"></script>
         <script src="/assets/js/main.js"></script>

         <!-- DATATABLES  -->
      <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
      <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap.js"></script>
      </footer>

      <script>
         $(document).ready(function() {
            $('#myTable').DataTable({
                  "language": {
                     "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json"
                  }
               }

            );


         });
      </script>

   </body>
</html>

