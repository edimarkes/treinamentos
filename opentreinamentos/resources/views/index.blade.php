@extends('layouts.main')

@section('title','Trabalhe Aqui')



 

@section('content')

 <!-- Start Banner -->
         <div class="ulockd-home-slider">
            <div class="container-fluid">
               <div class="row">
                  <div class="pogoSlider" id="js-main-slider">
                     <div class="pogoSlider-slide" style="background-image:url(images/slider_1.jpg);">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="slide_text">
                                    <h6>TUDO PARA SUA EMPRESA</h6>
                                    <h4>PROJETOS</h4>
                                    <B >DESENVOLVIMENTO | ATUALIZAÇÕES | OUTSOURCING</B>
                                    <br>
                                    <a class="readmore_bt" href="projetos.html">Veja Mais</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pogoSlider-slide" style="background-image:url(images/slider_1.jpg);">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="slide_text">
                                    <h6>APLICAÇÕES PARA CELULAR</h6>
                                    <h4>APPS</h4>
                                    <B>IOS | ANDROID</B>
                                    <br>
                                    <a class="readmore_bt" href="apps.html">Veja Mas</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pogoSlider-slide" style="background-image:url(images/slider_1.jpg);">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="slide_text">
                                    <h6>SEU NEGÓCIO NA INTERNET</h6>
                                    <h4>LOJA VIRTUAL</h4>
                                    <B>Loja otimizada para seu negócio</B>
                                    <br>
                                    <a class="readmore_bt" href="lojavirtual.html">Veja Mas</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pogoSlider-slide" style="background-image:url(images/slider_1.jpg);">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="slide_text">
                                    <h6>CURSOS E TREINAMENTOS</h6>
                                    <P>TURMAS ABERTAS OU INCOMPANY</P><BR>
                                    <B>POWER BI | EXCEL | PROGRAMAÇÃO | SQL</B>
                                    <br>
                                    <a class="readmore_bt" href="cursos.html">Veja Mais</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- .pogoSlider -->
               </div>
            </div>
         </div>
         <!-- End Banner -->
         <!-- section -->
         <div class="section about_section layout_padding dash_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">
                           <h2>o que oferecemos para você ou sua empresa</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_1.png" alt="#" />
                            <img class="default-none" src="images/icon_1w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>PROJETOS</h4>
                         </div>
                         <div class="full">
                           <p>Desenvolvimento de projetos, dashboards, atualizações ou locação de profissionais:<br>(outsourcing).</p>
                         </div>
                     </div>
                     <br>
                     <br>
                     <div class="full center">
                        <a class="readmore_bt" href="projetos.html">Veja Mais</a>
                      </div>

                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_2.png" alt="#" />
                            <img class="default-none" src="images/icon_2w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>APPS</h4>
                         </div>
                         <div class="full">
                           <p>Desenvolvimento de apps ou atualizações para os sistemas operacionais IOS e Android</p>
                         </div>
                     </div>
                     <div class="full center">
                        <a class="readmore_bt" href="apps.html">Veja Mais</a>
                      </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_3.png" alt="#" />
                            <img class="default-none" src="images/icon_3w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>LOJA VIRTUAL</h4>
                         </div>
                         <div class="full">
                           <p>Loja Virtual na nuvem com alta disponibilidade para seu negócio na internet</p>
                         </div>
                     </div>
                     <div class="full center">
                        <a class="readmore_bt" href="lojavirtual.html">Veja Mais</a>
                      </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_4.png" alt="#" />
                            <img class="default-none" src="images/icon_4w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>CURSOS E TREINAMETOS</h4>
                         </div>
                         <div class="full">
                           <p>Cursos e treinamentos: Power BI e Excel. Turmas abertas ou na sua empresa (InCompany)</p>
                         </div>
                     </div>
                     <div class="full center">
                        <a class="readmore_bt" href="cursos.html">Veja Mais</a>
                      </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">
                           <h2 class="margin-bottom_30"><strong class="small theme_color">Tenha uma experiência incrível</strong><br> Os melhores profisionais para sua empresa</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full">
                        <div class="heading_small">
                          <h4>Projetos ou Locação de Profissionais</h4>
                        </div>
                        <p>Trabalhamos com desenvolvimento de projetos utilizando as mais variadas linguagens de programação de acordo com a necessidade da sua empresa em parceria com desenvolvedores e profissionais altamente qualificados. Atendemos demandas em todo o território nacional e demandas internacionais.<br><br>Também fornecemos profissionais qualificados e alocados dentro da sua empresa (OUTSOURCING) ou de forma remota para atender demandas pontuais pelo tempo que for necessário de acordo com o projeto.</p>
                      </div>
                                       </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full text_align_center">
                        <img class="img-responsive" src="images/f1.png" alt="#" />   
                      </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><strong class="small theme_color">Projetos personalizados</strong><br>para resolver sua necessidade</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <p>Permita que façamos sem compromisso uma proposta para um projeto ou necessidade da sua empresa. Fornecemos consultoria especializada e soluções tecnológicas com foco no seu negócio. Apresente seu problema e deixe a solução com a <b>ZONALIVRE-WEB</b>. Será uma experiência incrível.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       <img class="img-responsive" src="images/video_img.jpg" alt="#" />
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->

       
@endsection