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


<!--icones -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<!-- Vendor CSS Files  Trabalhe Aqui-->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


      


      <!-- DATA TABLE CSS -->
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap.css">

  <!-- Scripts para CEP automático -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->
<script>
   $(document).ready(function() {

      function limpa_formulário_cep() {
         // Limpa valores do formulário de cep.
         $("#logradouro").val("");
         $("#bairro").val("");
         $("#cidade").val("");
         $("#estado").val("");

      }

      //Quando o campo cep perde o foco.
      $("#cep").blur(function() {

         //Nova variável "cep" somente com dígitos.
         var cep = $(this).val().replace(/\D/g, '');

         //Verifica se campo cep possui valor informado.
         if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

               //Preenche os campos com "..." enquanto consulta webservice.
               $("#logradouro").val("...");
               $("#bairro").val("...");
               $("#cidade").val("...");
               $("#estado").val("...");


               //Consulta o webservice viacep.com.br/
               $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                  if (!("erro" in dados)) {
                     //Atualiza os campos com os valores da consulta.
                     $("#logradouro").val(dados.logradouro);
                     $("#bairro").val(dados.bairro);
                     $("#cidade").val(dados.localidade);
                     $("#estado").val(dados.uf);

                  } //end if.
                  else {
                     //CEP pesquisado não foi encontrado.
                     limpa_formulário_cep();
                     alert("CEP não encontrado.");
                  }
               });
            } //end if.
            else {
               //cep é inválido.
               limpa_formulário_cep();
               alert("Formato de CEP inválido.");
            }
         } //end if.
         else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
         }
      });
   });
</script>


  <!-- Jquery.Mask  -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script type="text/javascript">
    function formatar(mascara, documento) {
 let i = documento.value.length;
 let saida = '#';
 let texto = mascara.substring(i);
 while (texto.substring(0, 1) != saida && texto.length ) {
   documento.value += texto.substring(0, 1);
   i++;
   texto = mascara.substring(i);
 }
}

</script>

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
         <script src="/assets/js/jquery.min.js"></script>
         <script src="/assets/js/browser.min.js"></script>
         <script src="/assets/js/breakpoints.min.js"></script>
         <script src="/assets/js/util.js"></script>
         <script src="/assets/js/main.js"></script>

 <!-- Script DataTable -->

 <script src="//cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>

 <script>           
  $('#myTable').DataTable({
      language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json'
      }
    });
  </script>
   </body>
</html>
