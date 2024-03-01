<!DOCTYPE HTML>
<html>
	<head>
	<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/maineventos/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="/maineventos/assets/css/noscript.css" />
	     </noscript>
		<link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-icons.css">     
       
        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
       
        <link rel="stylesheet" href="/css/style.css" /> 

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>






<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


   <!--  -------------------------------------------   -->
   <!-- Adicionando JQuery -->
   <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>











        
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
							<div class="logotipo" >
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
					             <li><a href="/listadecursos">Todos os Cursos</a></li>
                            <li><a href="/treinamentosincompany">Treinamentos InCompany</a></li>
                            <li><a href="/terceiriza">Outsourcing</a></li>
                            <li><a href="/trabalheconosco">Trabalhe Conosco</a></li>
                            <li><a href="/turmasabertas">Turmas Abertas</a></li>
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
	

		

 



	</body>
</html>