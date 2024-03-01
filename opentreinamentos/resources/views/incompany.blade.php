@extends('layouts.about')
@section('title','Treinamentos | Incompany')
@section('content')
<link href="incompany/css/style.css" rel="stylesheet">
<link href="incompany/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="incompany/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="incompany/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="incompany/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="incompany/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="incompany/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


<style>
  #hero{
    margin-top: 20px;
  }

</style>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <h1>Treinamentos InCompany</h1>
      <h2>Desenvolva seus colaboradores com o que há de melhor, pois desenvolver pessoas é a nossa missão</h2>
      <a href="/contato" class="btn-get-started scrollto">Solicite uma Proposta</a>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <br>

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>Sobre nós</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p class="textincompany">
          A Info | Treinamentos é uma empresa dinâmica e que nasceu da necessidade de fornecer cursos e treinamentos práticos que ajudem na formação profissional e qualificação direta para o mercado de trabalho.
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Primamos pelo aprendizado prático</li>
          <li><i class="ri-check-double-line"></i> Mão na massa é a nossa principal cultura</li>
          <li><i class="ri-check-double-line"></i> O aprendizado real é o que fornecemos aos nossos alunos</li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p class="textincompany">
          Nos treinamentos InCompany nossos instrutores vão até a empresa, avaliam a necessidade e fornecem o treinamento em horários e em condições de acordo com o que a empresa precisa. Mais do que treinar, somos parceiros para atender as demandas das empresas. 
        </p>
        <a href="#" class="btn-learn-more">Veja o vídeo</a>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Our Values Section ======= -->
<section id="our-values" class="our-values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("incompany/img/our-values-1.jpg");'>
              <div class="card-body">
			
                <h5 class="card-title">Nossa Missão</h5>
                <p class="card-text">Temos como missão o desenvolvimento e a qualificação profissional de pessoas e trabalhamos diariamente nesse objetivo.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("incompany/img/our-values-2.jpg");'>
              <div class="card-body">
                <h5 class="card-title">Nosso Plano</h5>
                <p class="card-text">Fornecer treinamentos objetivos com instrutores qualificados e metodologia moderna para qualificar os colaboradores e ampliar sua capacidade de entregar mais e melhor. Fornecemos treinamentos sob demanda.</p>
               
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("incompany/img/our-values-3.jpg");'>
              <div class="card-body">
                <h5 class="card-title">Nossa Visão</h5>
                <p class="card-text">Entregar para as empresas através de treinamentos, um profissional melhor e mais qualificado em suas funções.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("incompany/img/our-values-4.jpg");'>
              <div class="card-body">
                <h5 class="card-title">Nosso Cuidado</h5>
                <p class="card-text">Nos preocupamos em cuidar para entregar o melhor treinamento e qualificar de forma mais concisa os coloboradores da empresa.</p>
               
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Our Values Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Alguns de Nossos Treinamentos</h2>
          <p>Temos uma ampla varidade de cursos e treinamentos para tornar sua equipe muito mais eficiente e qualificada para atender as demandas da empresa. Abaixo alguns dos treinamentos mais procurados. Para ver a lita completa - acesse <a href="/listadecursos" target="blank"> aqui</a></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title">Excel</h4>
              <p class="description">Uma das ferramentas da Microsoft mais usadas nas empresas. Nosso curso aborda o básico, intermediário e avançado</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title">Power BI</h4>
              <p class="description">O Power BI se consolidou no mercado como a ferramenta de dados mais utizadas pelas empresas. Além da consolidação dos dados, o Power BI gera gráficos e dashboards elegantes.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title">Aplicativos para Celular</h4>
              <p class="description">Fornecemos treinamentos tanto para aplicativos com sistema operacional Android como IOS. Desenvolvemos ou atualizamos aplicativos, sempre atendendo as necessidades das empresas</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title">Java</h4>
              <p class="description">Trabalhamos com as mais variadas linguagens de programação, incluindo a linguagem Java que ainda é uma das linguagens mais usadas no mundo. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
              <h4 class="title">SQL</h4>
              <p class="description">Hoje a parte de dados é algo sensível e importantíssimo nas empresas. Profissionais com conhecimento em SQL são fundamentais. Treinamos e orientamos nessa que é a principal linguagem de manipulção de dados do mundo.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
              <h4 class="title">Python</h4>
              <p class="description">Apesar de ser uma linguagem mais recente, Python foi muito bem aceita pelo mercado devido a facilidade no desenvovimento dos algorítimos e hoje é utiliza por uma ampla quantidade de empresas. </p>
            </div>
            
          </div>
          
        </div>
        
      </div>

      
    </section><!-- End Services Section -->



@endsection