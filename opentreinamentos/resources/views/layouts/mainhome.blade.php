<!DOCTYPE HTML>

<html>
	<head>
	<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <script src="https://kit.fontawesome.com/10de34da91.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-icons.css">
        <link rel="stylesheet" href="/carousel/css/style.css">
        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        <link rel="stylesheet" href="css/cards.css">
        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
        <link rel="stylesheet" href="assets/css/footer.css" />
        <link rel="stylesheet" href="/css/style.css" />
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="/css/responsive.css" />
   <!-- Custom CSS -->
   <link rel="stylesheet" href="/css/custom.css" />
	   
	   <!--DATA TABLES CSS -->
   
    

        <!-- OUTSOURCING   -->
        <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="outsourcing/css/bootstrap.css" />

  <!-- Trabalhe Aqui css -->
  <link rel="stylesheet" type="text/css" href="/css/formtrabalheaqui.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="outsourcing/css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="outsourcing/css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="outsourcing/css/responsive.css" rel="stylesheet" />

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
<!-- DATA TABLE CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap.min.css">

<!-- DATA TABLE SCRIPT-->
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

   
  




 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files  Trabalhe Aqui-->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS Trabalhe Aui -->
<link href="assets/css/trabalheaqui.css" rel="stylesheet">

        
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
                     <a href="/" class="logo">
                           <span> <img src="images/logo.jpg" alt="" class="symbol" /></span>
                            <span class="titlelogo"><b>INFO | TREINAMENTOS</b></span>
                        </a>
								</span>

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
            
               <BR>
						
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
			
               @yield('content')

               <br>
               <br>
            
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
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<!-- DATATABLES SCRIPT -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>


</footer>




	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

                    <!-- JAVASCRIPT FILES -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/Headroom.js"></script>
     <script src="js/jQuery.headroom.js"></script>
     <script src="js/slick.min.js"></script>
     <script src="js/custom.js"></script>

       <!-- jQery -->
  <script type="text/javascript" src="outsourcing/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="outsourcing/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="outsourcing/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->


	</body>
</html>