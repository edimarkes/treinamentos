@extends('layouts.detalhesmain')
@section('title','Pacote Office')
@section('content')
<!-- Webpage Title -->


<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
<link href="cursosgerais/css/styles.css" rel="stylesheet">

<style>
    .containergeral {
        width: 100%;
    }

    .turmasperiodo {
        background-color: green;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        color: #FFFFFF;
    }

    .cliqueaqui {
        width: 200px;
    }

    th {
        background-color: #F5E50F;
    }
</style>







<!-- Header -->
<div class="containergeral">


    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Pacote Office</h1>
                        <p class="p-large p-heading">Aprenda o que existe de mais inovador no tocante ao uso das mais utilizadas e melhores ferramentas de produtividade voltadas para uso administrativo.</p>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-microsoft"></i>Baixar Conteúdo Programático</a>
                        </a>
                        </a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="cursosgerais/images/pacoteoffice.jpg" alt="Pacote Office">
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="circulos">
            <div class="deco-white-circle-1">
                <img src="cursosgerais/images/decorative-white-circle.svg" alt="alternative">
            </div> <!-- end of deco-white-circle-1 -->
            <div class="deco-white-circle-2">
                <img src="cursosgerais/images/decorative-white-circle.svg" alt="alternative">
            </div> <!-- end of deco-white-circle-2 -->
            <div class="deco-blue-circle">
                <img src="cursosgerais/images/decorative-blue-circle.svg" alt="alternative">
            </div> <!-- end of deco-blue-circle -->
            <div class="deco-yellow-circle">
                <img src="cursosgerais/images/decorative-yellow-circle.svg" alt="alternative">
            </div> <!-- end of deco-yellow-circle -->
            <div class="deco-green-diamond">
                <img src="cursosgerais/images/decorative-green-diamond.svg" alt="alternative">
            </div> <!-- end of deco-yellow-circle -->
        </div>
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Small Features -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-body">
                            <b class="card-title">Produção de documentos</b>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image green">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="card-body">
                            <b class="card-title">Gráficos elaborados</b>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image red">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="card-body">
                            <b class="card-title">Apresentações via slides </b>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image yellow">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="card-body">
                            <b class="card-title">Monografias e formulário</b>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image blue">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="card-body">
                            <b class="card-title">Relatórios e contratos</b>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of small features -->




    <!-- Description 1 -->
    <div id="description" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="cursosgerais/images/pacoteoffice2.png" alt="pacote office">
                    </div> <!-- end of image-container -->



                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>Sobre o Curso</h3>
                        <p>Aprenda as principais ferramentas utilizadas do pacote office da Microsoft - do básico ao avançado. Torne-se mais produtivo e eficiente. Aprenda a usar todo o potencial do pacote office de forma simples e intuitiva.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Construa apresentações surpreendentes e visualmente bonitas no Power Point.
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Crie Relatórios, Contratos, TCC, Monografias, Formulários, Certificados e o que precisar no Word.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Aprenda ferramentas poderosas e comece a aprender o que o Excel pode oferecer para o seu crescimento profissional..</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">O curso do pacote office contém os cursos de: Word, Excel - Módulo I e Power Point.</div>
                            </li>
                        </ul>


                        <div class="prerequisito">
                            <p>*Não há pré requisitos para realizar esse curso, apenas que você saiba utilizar o windows. Caso queira fazer o curso por ferramenta, veja abaixo cada curso separadamente em cursos relacionados. </p>
                        </div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of description 1 -->



    <!-- Description 2 -->
    <div id="description" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="proximasturmas">
                        <h4 class="turmasperiodo">Turmas Online ao Vivo</h4>
                        <p>*Lembre-se: Para matricular-se em algum curso, você precisa estar logado(a) no seu painel do aluno antes. Se desejar, logue-se <a href="/login" target="_blank"> aqui.</a></p>

                        <!-- TURMAS ÀS SEGUNDAS QUARTAS E SEXTAS - ONLINE AO VIVO -->

                        <b class="periodo"> Noturno - Segundas, Quartas e Sextas | 19:00 às 23:00</b>
                        <table>
                            <tr>
                                <th>Inicio</th>
                                <th>Término</th>
                                <th>Valor</th>





                                <th>Comprar</th>

                            </tr>
                            </thead>
                            <tbody>

                                @foreach($cursosevento as $curso)
                                @if($curso->site == 1)
                                @if($curso->nomecurso == 'Pacote Office' && $curso->periodo == 'Noturno' && $curso->diassemana == "Segundas, Quartas e Sextas" && $curso->formato == 'Online ao Vivo')


                                <tr>



                                    <td>{{date('d/m/Y',strtotime($curso->datainicial))}}</td>
                                    <td>{{date('d/m/Y',strtotime($curso->datafinal))}}</td>
                                    <td>{{ number_format($curso->valorevento, 2, ',','.')}}</td>
                                    <td><button class="buttoncar"><a href="/eventos/{{$curso->id}}"><ion-icon name="cart-outline" class="cartoutline"></ion-icon></a></button>
                                    </td>
                                    @endif
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                        <br>
                        <br>








                        <!-- TURMAS ÀS TERÇAS E QUINTAS - ONLIEN AO VIVO -->
                        <b>Noturno - Terças e Quintas | 19:00 às 23:00</b>
                        <table>
                            <tr>
                                <th>Inicio</th>
                                <th>Término</th>




                                <th>Valor</th>
                                <th>Comprar</th>

                            </tr>
                            </thead>
                            <tbody>



                                @foreach($cursosevento as $curso)
                                @if($curso->site == 1)
                                @if($curso->nomecurso == 'Pacote Office' && $curso->periodo == 'Noturno' && $curso->diassemana == 'Terças e Quintas' && $curso->formato == 'Online ao Vivo')
                                <tr>



                                    <td>{{date('d/m/Y',strtotime($curso->datainicial))}}</td>
                                    <td>{{date('d/m/Y',strtotime($curso->datafinal))}}</td>



                                    <td>{{ number_format($curso->valorevento, 2, ',','.')}}</td>
                                    <td><button class="buttoncar"><a href="/eventos/{{$curso->id}}"><ion-icon name="cart-outline" class="cartoutline"></ion-icon></a></button>
                                    </td>


                                    @endif
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <br>
                        <br>

                        <!-- TURMAS AOS SÁBADOS PELA MANHÃ - ONLINE AO VIVO -->
                        <b>Sábados - Manhã | 9:00 às 13:00</b>
                        <table>
                            <tr>
                                <th>Inicio</th>
                                <th>Término</th>




                                <th>Valor</th>
                                <th>Comprar</th>

                            </tr>
                            </thead>
                            <tbody>



                                @foreach($cursosevento as $curso)
                                @if($curso->site == 1)
                                @if($curso->nomecurso == 'Pacote Office' && $curso->periodo == 'Sábados' && $curso->diassemana == 'Sábados Manhã' && $curso->formato == 'Online ao Vivo')
                                <tr>



                                    <td>{{date('d/m/Y',strtotime($curso->datainicial))}}</td>
                                    <td>{{date('d/m/Y',strtotime($curso->datafinal))}}</td>



                                    <td>{{ number_format($curso->valorevento, 2, ',','.')}}</td>
                                    <td><button class="buttoncar"><a href="/eventos/{{$curso->id}}"><ion-icon name="cart-outline" class="cartoutline"></ion-icon></a></button>
                                    </td>


                                    @endif
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <br>
                        <br>

                        <!-- TURMAS AOS SÁBADOS À TARDE - ONLINE AO VIVO -->
                        <b>Sábados à tarde | 14:00 às 18:00</b>
                        <table>
                            <tr>
                                <th>Inicio</th>
                                <th>Término</th>




                                <th>Valor</th>
                                <th>Comprar</th>

                            </tr>
                            </thead>
                            <tbody>



                                @foreach($cursosevento as $curso)
                                @if($curso->site == 1)
                                @if($curso->nomecurso == 'Pacote Office' && $curso->periodo == 'Sábados' && $curso->diassemana == 'Sábados Tarde' && $curso->formato == 'Online ao Vivo')
                                <tr>



                                    <td>{{date('d/m/Y',strtotime($curso->datainicial))}}</td>
                                    <td>{{date('d/m/Y',strtotime($curso->datafinal))}}</td>



                                    <td>{{ number_format($curso->valorevento, 2, ',','.')}}</td>
                                    <td><button class="buttoncar"><a href="/eventos/{{$curso->id}}"><ion-icon name="cart-outline" class="cartoutline"></ion-icon></a></button>
                                    </td>


                                    @endif
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div> <!-- end of image-container -->
                    <br>

                    <div class="proximasturmasonline">
                        <h4 class="turmasperiodo">Turmas Presenciais</h4>
                        <p>*Lembre-se: Para matricular-se em algum curso, você precisa estar logado(a) no seu painel do aluno antes. Se desejar, logue-se <a href="/login" target="_blank"> aqui.</a></p>

                        <!-- TURMAS ÀS SEGUNDAS, QUARTAS E SEXTAS - ONLINE AO VIVO -->
                        <b> Noturno - Segundas, Quartas e Sextas | 19:00 às 23:00</b>
                        <table>
                            <tr>
                                <th>Inicio</th>
                                <th>Término</th>
                                <th>Valor</th>





                                <th>Comprar</th>

                            </tr>
                            </thead>
                            <tbody>

                                @foreach($cursosevento as $curso)
                                @if($curso->site == 1)
                                @if($curso->nomecurso == 'Pacote Office' && $curso->periodo == 'Noturno' && $curso->diassemana == "Segundas, Quartas e Sextas" && $curso->formato == 'Presencial')


                                <tr>



                                    <td>{{date('d/m/Y',strtotime($curso->datainicial))}}</td>
                                    <td>{{date('d/m/Y',strtotime($curso->datafinal))}}</td>
                                    <td>{{ number_format($curso->valorevento, 2, ',','.')}}</td>
                                    <td><button class="buttoncar"><a href="/eventos/{{$curso->id}}"><ion-icon name="cart-outline" class="cartoutline"></ion-icon></a></button>
                                    </td>
                                    @endif
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                        <br>
                        <br>

                        <!-- TURMAS ÀS TERÇAS E QUINTAS - PRESENCIAL -->
                        <b>Noturno - Terças e Quintas | 19:00 às 23:00</b>
                        <table>
                            <tr>
                                <th>Inicio</th>
                                <th>Término</th>




                                <th>Valor</th>
                                <th>Comprar</th>

                            </tr>
                            </thead>
                            <tbody>



                                @foreach($cursosevento as $curso)
                                @if($curso->site == 1)
                                @if($curso->nomecurso == 'Pacote Office' && $curso->periodo == 'Noturno' && $curso->diassemana == 'Terças e Quintas' && $curso->formato == 'Presencial')
                                <tr>



                                    <td>{{date('d/m/Y',strtotime($curso->datainicial))}}</td>
                                    <td>{{date('d/m/Y',strtotime($curso->datafinal))}}</td>



                                    <td>{{ number_format($curso->valorevento, 2, ',','.')}}</td>
                                    <td><button class="buttoncar"><a href="/eventos/{{$curso->id}}"><ion-icon name="cart-outline" class="cartoutline"></ion-icon></a></button>
                                    </td>


                                    @endif
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <br>
                        <br>

                        <!-- TURMAS AOS SÁBADOS PELA MANHÃ - PRESENCIAL -->
                        <b>Sábados - Manhã | 9:00 às 13:00</b>
                        <table>
                            <tr>
                                <th>Inicio</th>
                                <th>Término</th>




                                <th>Valor</th>
                                <th>Comprar</th>

                            </tr>
                            </thead>
                            <tbody>



                                @foreach($cursosevento as $curso)
                                @if($curso->site == 1)
                                @if($curso->nomecurso == 'Pacote Office' && $curso->periodo == 'Sábados' && $curso->diassemana == 'Sábados Manhã' && $curso->formato == 'Presencial')
                                <tr>



                                    <td>{{date('d/m/Y',strtotime($curso->datainicial))}}</td>
                                    <td>{{date('d/m/Y',strtotime($curso->datafinal))}}</td>



                                    <td>{{ number_format($curso->valorevento, 2, ',','.')}}</td>
                                    <td><button class="buttoncar"><a href="/eventos/{{$curso->id}}"><ion-icon name="cart-outline" class="cartoutline"></ion-icon></a></button>
                                    </td>


                                    @endif
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <br>
                        <br>
                        <!-- TURMAS AOS SÁBADOS À TARDE - PRESENCIAL-->
                        <b>Sábados à Tarde | 14:00 às 18:00</b>
                        <table>
                            <tr>
                                <th>Inicio</th>
                                <th>Término</th>




                                <th>Valor</th>
                                <th>Comprar</th>

                            </tr>
                            </thead>
                            <tbody>



                                @foreach($cursosevento as $curso)
                                @if($curso->site == 1)
                                @if($curso->nomecurso == 'Pacote Office' && $curso->periodo == 'Sábados' && $curso->diassemana == 'Sábados Tarde' && $curso->formato == 'Presencial')
                                <tr>



                                    <td>{{date('d/m/Y',strtotime($curso->datainicial))}}</td>
                                    <td>{{date('d/m/Y',strtotime($curso->datafinal))}}</td>



                                    <td>{{ number_format($curso->valorevento, 2, ',','.')}}</td>
                                    <td><button class="buttoncar"><a href="/eventos/{{$curso->id}}"><ion-icon name="cart-outline" class="cartoutline"></ion-icon></a></button>
                                    </td>


                                    @endif
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div> <!-- end of col -->
                <div class="col-lg-6 cursorelacionado">
                    <div class="text-cursosrelacionados">
                        <div class="toprelacionados">
                            <h5>Cursos Relacionados</h5>


                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <p><img src="/cursosgerais/images/excelmodulo1.jpg" alt="Excel - Módulo I" class="imagemrelacionados"></p>
                                </li>

                            </ul>
                            <a href="/excel" target="_blank" class="btn-solid-reg">Ver Mais</a>

                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <p><img src="/cursosgerais/images/excel2.jpg" alt="Excel - Módulo II" class="imagemrelacionados"></p>
                                </li>

                            </ul>
                            <a href="/excelavancado" target="_blank" class="btn-solid-reg">Ver Mais</a>

                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <p><img src="/cursosgerais/images/word1.jpg" alt="word" class="imagemrelacionados"></p>
                                </li>

                            </ul>
                            <a href="/word" target="_blank" class="btn-solid-reg">Ver Mais</a>

                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <p><img src="/cursosgerais/images/powerpoint2.jpg" alt="Power Point" class="imagemrelacionados"></p>
                                </li>

                            </ul>
                            <a href="/powerpoint" target="_blank" class="btn-solid-reg">Ver Mais</a>

                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <p><img src="/cursosgerais/images/powerbi1.jpg" alt="Power BI" class="imagemrelacionados"></p>
                                </li>

                            </ul>
                            <a href="/powerbi" target="_blank" class="btn-solid-reg">Ver Mais</a>


                        </div>




                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of description 2 -->
</div><!-- end containergeral -->





<!-- Scripts -->
<script src="cursosgerais/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="cursosgerais/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="cursosgerais/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="cursosgerais/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="cursosgerais/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="cursosgerais/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
<script src="cursosgerais/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="cursosgerais/js/scripts.js"></script> <!-- Custom scripts -->

@endsection