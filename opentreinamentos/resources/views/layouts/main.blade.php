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

   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />





   <script type="text/javascript">
      /* Máscaras ER */
      function mascara(o, f) {
         v_obj = o
         v_fun = f
         setTimeout("execmascara()", 1)
      }

      function execmascara() {
         v_obj.value = v_fun(v_obj.value)
      }

      function mtel(v) {
         v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
         v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
         v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
         return v;
      }

      function id(el) {
         return document.getElementById(el);
      }
      window.onload = function() {
         id('telefone').onkeyup = function() {
            mascara(this, mtel);
         }
      }
   </script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

   <script type="text/javascript">
      $(document).ready(function() {
         $('#cpfparticipante').mask('000.000.000-00');
         $('#cep').mask('00000-000');

      });
   </script>
   <!--  -------------------------------------------   -->
   <!-- Adicionando JQuery -->
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

   <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.7.0.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <style>
   .logotipo {
    display: flex;
    justify-content: center;
   }

</style>


</head>




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
               <li><a href="/">Home</a></li>
               <li><a href="/treinamentosincompany">Treinamentos InCompany</a></li>
               <li><a href="/terceiriza">Outsourcing</a></li>
               <li><a href="/trabalheconosco">Trabalhe Conosco</a></li>
               <li><a href="/turmasabertas">Turmas Abertas</a></li>
               <li><a href="/trilhas">Trilhas</a></li>
               <li><a href="/contato">Fale Conosco</a></li>
               <li><a href="/login">Login</a></li>

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
                      
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img src="/images/menu_icon.png"></button>
                  </div>
               </div>
            </div>
         </header>
         <!-- End header -->
         <div class="logotipo">
         <a href=" /" class=""><img src="/images/logo.jpg" width="50px" /><b>INFO | TREINAMENTOS</b></a>
         </div>



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

      <!-- DATATABLES  -->
      <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
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

      <script src="sweetalert2.all.min.js"></script>

</body>

</html>