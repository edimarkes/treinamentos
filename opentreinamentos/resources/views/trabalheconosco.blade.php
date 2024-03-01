@extends('layouts.detalhesmain')
@section('title','Trabalhe Aqui')
@section('content')

<style>
     .opcoes{
          display: flex;
          align-items: center;
          justify-content: center;
      width: 100%;
     }
    
     #main {
          width: 100%; 
         padding: 100px;
         margin-top: -100px;
        
     }
     .imgprogramacao {
          width: 300px;
          height: 200px;
     }
</style>
<!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/trabalheaqui.css" rel="stylesheet">




<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

     <div class="container">
          <div class="row">
               <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Venha trabalhar conosco</h1>
                    <h2>E compartilhe da nossa missão de qualificar pessoas</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                         <a href="/formtrabalheaqui" class="btn-get-started scrollto">Cadastre-se Aqui</a>
                         <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Assista ao Video</span></a>
                    </div>
               </div>
               <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/why-us.png" class="img-fluid animated" alt="">
               </div>
          </div>
     </div>
</section><!-- End Hero -->

<div class="opcoes">


<main id="main">

     <!-- ======= Clients Section ======= -->
     <section id="clients" >
          <div class="programacao">
               <div class="row" data-aos="zoom-in">
             
              
                
                 
                    
               </div>
          </div>
          

               
                    
                    

             
     </section>

     <!-- End Cliens Section -->

     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
          <div class="container" data-aos="fade-up">

               <div class="section-title">
                    <h2>Opções</h2>
               </div>

               <div class="row content">
                    <div class="col-lg-6">
                         <p>
                              A primeira é trabalhar como instrutor, ensinando e ministrando os cursos
                         </p>
                         <ul>
                              <li><i class="ri-check-double-line"></i>Temos turmas com aulas presenciais </li>
                              <li><i class="ri-check-double-line"></i> Temos turmas com aulas Online ao Vivo</li>
                              <li><i class="ri-check-double-line"></i>* Contratações PJ.</li>

                         </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                         <p>
                              A segunda é trabalhar como programador no sistema de Outsourcing.
                              De acordo com a demanda você pode trabalhar:
                         </p>
                         <ul>
                              <li><i class="ri-check-double-line"></i>De forma remota </li>
                              <li><i class="ri-check-double-line"></i>Presencial na empresa onde será prestado o serviço.</li>
                               <li><i class="ri-check-double-line"></i>* Contratações PJ.</li>

                         </ul>

                    </div>
               </div>

          </div>
     </section><!-- End About Us Section -->
</main>
</div>
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/maintrabalheaqui.js"></script>
<br>
<br>
<br>

@endsection