@extends('layouts.mainprincipal')
@section('title','Info | Treinamentos')
@section('content')
<style>
	.cssFont_1 {
font-family: MS Sans Serif;
font-size: 20px;
letter-spacing: 0px;
word-spacing: 0px;
color: #CCFFFF;
font-weight: normal;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: none;
background-color:#426F42 ;
padding: 25px;
border-radius: 10px;


}
.tiles h2 {
	color: #CCFFFF;
}
</style>
<!-- Wrapper -->
<div id="wrapper">
	<!-- Main -->
	<div id="main">
		<div class="inner">
			<section>
				<h1 class="titulohome">A melhor maneira de aprender de verdade é na prática<br />
				</h1>
				<p class="textohome"><div class="cssFont_1">Deseja aprender uma nova profissão? Mudar de carreira? Se especializar na área em que já atua? Aqui você aprenderá de verdade com profissionais qualificados e engajados no seu crescimento. A área de tecnologia é uma das mais promissoras e rentáveis devido a falta de profissionais qualificados. Escolha uma das áreas abaixo e maõs na massa rumo ao seu futuro profissional</div></p>
			</section>
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

				<div class="carousel-inner">

					<div class="carousel-item active">
						<img src="/carousel/images/pacoteoffice2.png" alt="Image" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="/carousel/images/dados2.png" alt="Image" class="img-fluid">
					</div>
					<div class="carousel-item">
						<img src="/carousel/images/programacao2.png" alt="Image" class="img-fluid">
					</div>
				</div>

			</div>
			               <section class="tiles">
							<article class="style1">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="/excel" target="_blank">
							<h2>Excel Módulo I</h2>
							<div class="content texthome">
								<p class="texthomecurso">Aprenda os fundamentos do Excel e aprofunde-se na principal ferramenta em análise de dados e gestão empresarial.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>

										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="/excelavancado" target="_blank">
							<h2>Excel - Módulo II</h2>
							<div class="content texthome">
								<p  class="texthomecurso">Avance em recursos e técnicas mais avançadas e eleve o nível de suas planilhas e relatórios.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>

										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="/pacoteoffice" target="_blank">
										<h2>Pacote Office</h2>
										<div class="content texthome">
											<p class="texthomecurso">Domine as principais ferramentas do pacote office e destaque-se no mercado de trabalaho em um único curso.<br>
											<img class="saibamais" src="images/saibamais.png" alt="">
										</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="/powerbi" target="_blank">
										<h2>Power BI</h2>
										<div class="content texthome">
										<p class="texthomecurso">A ferramenta de Power BI é a principal ferramenta usada pelas empresas atualmente. Aprenda e seja um diferencial.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>
										</div>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="/javascript" target="_blank">
							<h2>JavaScript</h2>
							<div class="content texthome">
								<p class="texthomecurso">Aprenda e domine a principal linguagem da programção frontend da atualidade<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>

										</div>
									</a>
								</article>
											
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="/logicadeprogramacao" target="_blank">
									<h2>Lógica de Programação</h2>
							<div class="content texthome">
								<p class="texthomecurso">Quer aprender a programar do zero? Aprenda a pensar e a desenvolver racícionio lógico.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="/sql" target="_blak">
									<h2>Dados - SQL</h2>
							<div class="content texthome">
								<p class="texthomecurso">Torne-se um profissional de dados
									e entre em uma área que está em grande expansão no mercado de trabalho.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>
							
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="/programacaomobile" target="_blank">
									<h2>Móbile</h2>
							<div class="content texthome">
								<p class="texthomecurso"> Aprenda a desenvolver aplicativos móveis e seja um profissional altamente requisitado pelo mercado.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>
	</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="/naodisponivel">
									<h2>Redes e Infra</h2>
							<div class="content texthome">
								<p class="texthomecurso"> Números binários, transmissão, modulação de dados, cabeamento e tudo o que é necessário para gerenciar uma rede.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="/frontend" target="_blank">
									<h2>FrontEnd</h2>
							<div class="content texthome">
								<p class="texthomecurso">Aprenda no mesmo curso as tres principais linguagens da programação Front End: Html5, JavaScript e Css3.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic08.jpg" alt="" />
									</span>
									
									<a href="/naodisponivel">
							<h2>Arte e Design</h2>
							<div class="content texthome">
								<p class="texthomecurso">Aprenda a criar desenhos, ilustrações, gráficas e digitais com as principais feramentas como Photoshop, Illustrator e Premiere<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
									<a href="/naodisponivel">
									<h2>Games</h2>
							<div class="content texthome">
								<p class="texthomecurso">Domine o Game Design e Aprenda a desenvolver jogos como os que deram vida a Angry Birds, Call of Duty e tanto outros jogos.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic10.jpg" alt="" />
									</span>
									<a href="/naodisponivel">
							<h2>Testes Unitários</h2>
							<div class="content texthome">
								<p class="texthomecurso">Aprenda as boas práticas e o processo de automatização para testes unitários com diversas ferramentas.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>
							
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic11.jpg" alt="" />
									</span>
									<a href="/java" target="_blank">
							<h2>Java</h2>
							<div class="content texthome">
								<p class="texthomecurso">Domine e aprenda a linguagem backend mais utilizada no mundo.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>	</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="/laravel" target="_blank">
							<h2>Framework Laravel</h2>
							<div class="content texthome">
								<p class="texthomecurso">Aprenda o framework mais utilizado para a linguagem php.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>

										</div>
									</a>
								</article>

								<article class="style1">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="/php" target="_blank">
							<h2>PHP</h2>
							<div class="content texthome">
								<p class="texthomecurso">Aprenda a desenvolver sites e sistemas com a linguagem PHP. Milhares de sites e sotwares web utilizam essa linguagem<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>

										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="csharp" target="_blank">
							<h2>C# (C-Sharp)</h2>
							<div class="content texthome">
								<p class="texthomecurso">Desenvolva softwares com recursos e técnicas mais avançadas utilizando a linguagem C#.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>

										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="/python" target="_blank">
										<h2>Python</h2>
										<div class="content texthome">
										<p class="texthomecurso">Domine uma das linguagens mais utilizadas na atualidade e de fácil aprendizagem. Python é uma das principais linguagens para a gestão de dados hoje no mercado.<br>
											<img class="saibamais" src="images/saibamais.png" alt="">
										</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="/naodisponivel">
										<h2>Project</h2>
										<div class="content texthome">
											<p class="texthomecurso">Domine as principais ferramentas do pacote office e destaque-se no mercado de trabalaho em um único curso.<br>
											<img class="saibamais" src="images/saibamais.png" alt="">

											
										</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic11.jpg" alt="" />
									</span>
									<a href="/powerpoint" target="_blank">
							<h2>Power Point</h2>
							<div class="content texthome">
								<p class="texthomecurso">Domine e aprenda a linguagem backend mais utilizada no mundo.<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>	</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="/word" target="_blank">
							<h2>Word</h2>
							<div class="content texthome">
								<p class="texthomecurso">Crie Relatórios, Contratos, TCC, Monografias, Formulários, Certificados e o que precisar no Word<br>
									<img class="saibamais" src="images/saibamais.png" alt="">
								</p>

										</div>
									</a>
								</article>
							
							</section>
						</div>
					</div>

				
			</div>



		</div>
	</div>
	

	@endsection