<!DOCTYPE HTML>
<html>

<head>
   <title>@yield('title')</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
   <link rel="stylesheet" href="/maineventos/assets/css/main.css" />
   <noscript>
      <link rel="stylesheet" href="/maineventos/assets/css/noscript.css" />
   </noscript>
   <link rel="preconnect" href="https://fonts.googleapis.com">

   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

   <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon" />
   <link rel="stylesheet" href="/css/style.css" />
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

   <!--DATA TABLE CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap.min.css">


</head>

<body class="is-preload">
   <!-- Wrapper -->
   <div id="wrapper">

      <!-- Header -->
      <header id="header">
         <div class="inner">

            <!-- Logo -->
            <div class="logotipo">
               <a href="/" class="logo">
                  <span class="symbol"><img src="/images/logo.jpg" alt="" /></span><span class="title">INFO | TREINAMENTOS</span>
               </a>
               </span>
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
      <nav id="menu" class="menuextra">

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


   </div>

   <main>
      <div class="container fluid">
         <div class="row">
            @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
         </div>
      </div>
   </main>

   <br>
   <br>

   <footer>

      <!-- Start Footer -->

      <footer class="footer-box">
         <div class="containertext">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="heading_main text_align_center white_fonts margin-bottom_30">

                     </div>
                  </div>
               </div>
            </div>
            <div class="row ">

               <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                  <div class="full footer_blog f_icon_1 infoempresa">
                     <p>Localidade<br><small>São Paulo - SP<br>CNPJ: 29.598.876/0001-63</small></p>
                  </div>
               </div>

               <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                  <div class="full footer_blog f_icon_2">
                     <p>Fale Conosco:<br><small>Whatsapp: (11) 98498-6363 <br>Fone: (11) 5834-2214<br>Segunda à Sexta<br>das 09:00 às 18:00 </small></p>
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
                     <ul class="border-fa">
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


      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="/maineventos/assets/js/browser.min.js"></script>
      <script src="/maineventos/assets/js/breakpoints.min.js"></script>
      <script src="/maineventos/assets/js/util.js"></script>
      <script src="/maineventos/assets/js/main.js"></script>

      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap.min.js"></script>

      <script>
         $('#example').DataTable({
            language: {
               "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json"
            }
         });
      </script>






</body>

</html>