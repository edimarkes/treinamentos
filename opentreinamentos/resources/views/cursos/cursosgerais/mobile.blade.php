@extends('layouts.detalhesmain')
@section('title','Programação Móbile')
@section('content')  

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link rel="stylesheet" href="/mobile/css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/mobile/style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  .containergeral {
    width: 100%;
  }
  .about-btn {
    background-color: #66FF99;
    font-size: 20px;
    padding: 10px;
    border-radius: 20px;
  }
  .about-btn:hover {
    background-color: #FFFF99;
  }
</style>

<div class="containergeral">


<!-------Banner Start------->
<section class="banner" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="banner-text">
            <h2 class="white">Programação Móbile</h2>
            <h6 class="white">Torne-se um desenvolvedor especialista em aplicativos móveis </h6>
            <p class="banner-text white">Hoje quase tudo que está na internet também precisa ser acessado
            em aplicitivos móveis. Por isso a demanda por promissionais programadores que sejam especilistas nessa área é alta. Os principais sistemas operacionais que dominam o mercado são os sistemas Android e IOS. Seja um profissional de um deles ou de ambos. </p>
            <ul>
              <li><a href="#"><img src="/mobile/images/appstore.png" class="wow fadeInUp" data-wow-delay="0.4s"/></a></li>
              <li><a href="#"><img src="/mobile/images/playstore.png" class="wow fadeInUp" data-wow-delay="0.7s"/></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-12"> <img src="/mobile/images/iphone-screen.png" class="img-fluid wow fadeInUp"/> </div>
      </div>
    </div>
  </div>
  <span class="svg-wave"> <img class="svg-hero" src="/mobile/images/applight-wave.svg"> </span> </section>

<!-------Banner End-------> 

<!-------About End------->

<section class="about section-padding prelative" data-scroll-index='1'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Desenvolvimento Móbile</h3>
          <span class="line"></span>
          <p>Aprenda a programar para o sitema operacional Android, ou IOS ou para ambos. Veja abaixo as opções</p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <i class="fa fa-life-ring" aria-hidden="true"></i>
                <h5>Kotlin</h5>
                <p>Linguagem do Google específica para o sistema operacional Android.</p>
                  <a href="/naodisponivel" class="about-btn">Veja Mais</a> 
              </div>
            </div>


            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-mobile" aria-hidden="true"></i>
                <h5>Swifit</h5>
                <p>Linguagem de desenvolvimento para o sistema operacional IOS da Apple</p>
                  <a href="/naodisponivel" class="about-btn">Veja Mais</a> 
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.6s"> <i class="fa fa-bolt" aria-hidden="true"></i>
                <h5>Flutter</h5>
                <p>Plataforma de desenvolvimento tanto para o sistema Android como para o sistema IOS.</p>
                  <a href="/naodisponivel" class="about-btn">Veja Mais</a> 
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!-------About End-------> 
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 
<!-- scrollIt js --> 
<script src="/mobile/js/scrollIt.min.js"></script> 
<script src="/mobile/js/wow.min.js"></script> 

<script>
	wow = new WOW();
	wow.init();
$(document).ready(function(e) {

	$('#video-icon').on('click',function(e){
	e.preventDefault();
	$('.video-popup').css('display','flex');
	$('.iframe-src').slideDown();
	});
	$('.video-popup').on('click',function(e){
	var $target = e.target.nodeName;
	var video_src = $(this).find('iframe').attr('src');
	if($target != 'IFRAME'){
	$('.video-popup').fadeOut();
	$('.iframe-src').slideUp();
	$('.video-popup iframe').attr('src'," ");
	$('.video-popup iframe').attr('src',video_src);
	}
	});

	$('.slider').bxSlider({
	pager: false
	});
});
    
$(window).on("scroll",function () {

	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/logo-black.png');
	navbar.addClass("nav-scroll");

}else{
	$('.navbar-logo img').attr('src','images/logo.png');
	navbar.removeClass("nav-scroll");
}

});
$(window).on("load",function (){
	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/logo-black.png');
	navbar.addClass("nav-scroll");
	}else{
	$('.navbar-logo img').attr('src','images/logo-white.png');
	navbar.removeClass("nav-scroll");
	}

	$.scrollIt({
	
	easing: 'swing',      // the easing function for animation
	scrollTime: 900,       // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: null,    // function(pageIndex) that is called when page is changed
	topOffset: -63
	});
});

</script>

   
@endsection