@extends('layouts.detalhesmain')
@section('title','Contratar Curso')
@section('content')
<style>
	.popup {
		width: 450px;


		background: #9F9F5F;
		border-radius: 6px;
		position: fixed;
		top: 0;
		left: 50%;
		transform: translate(-50%, -50%) scale(0.1);

		padding: 0 30px 30px;
		color: #333;
		visibility: hidden;
		transition: transform 0.4s, top 0.4s;



	}

	.open-popup {
		visibility: visible;
		top: 50%;
		transform: translate(-50%, -50%) scale(1);
	}

	.popup img {

		width: 100px;
		margin-top: -50px;
		border-radius: 50%;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 2);

	}

	.popup h2 {
		font-size: 38px;
		font-weight: 500;
		margin: 30px 0 10px;


	}

	.popup button {
		width: 100%;
		margin-top: 50px;
		padding: 10px 0;
		background: black;
		color: #fff;
		outline: none;
		font-size: 18px;
		border-radius: 4px;
		cursor: pointer;
		box-shadow: 0 5px 5px rgba(0, 0, 0, 2);

	}

	.listaitens {
		margin-top: 250px;
		margin-left: -250px;
	}

	.sobreocurso {
		margin-top: 10px;
		width: 430px;
		height: 230px;
		background-color: #6fd649;
		padding: 10px;
		border-radius: 10px;
		margin-left: -380px;
		position: absolute;
	}

	.imagemevento {
		width: 100px;
		height: 100px;
		border-radius: 10px;
	}

	.btn1 {
		padding: 10px 56px;
		background: #FF6600;
		color: #fff;


		cursor: pointer;
		font-size: 12px;
		font-weight: 500;
		border-radius: 8px;
		margin-top: 50px;
		width: 200px;
		text-align: center;

	}

	.btn:hover {
		background: #016ABC;
		color: #fff;
		border: 1px solid;
		border-radius: 20px;

		text-shadow: none;
	}

	.btn1:hover {
		background: #016ABC;
		color: #fff;
		border: 1px solid #eee;
		border-radius: 20px;
		box-shadow: 5px 5px 5px #eee;
		text-shadow: none;
	}

	.secao4 {
		margin: 0;
		font-family: Helvetica, sans-serif;
	}

	.secao4-div {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		padding: 10px;


	}

	.secao4-div-card {
		display: flex;
		flex-direction: column;
		align-items: left;
		width: calc(100% / 3 - 60px);
		margin: 10px;
		padding: 20px;
		box-shadow: 2px 2px 16px 0px rgba(0, 0, 0, 0.1);
		border-radius: 15px;
		background-color: white;
		transition: all 0.5s ease;
	}



	.secao4-div-card:hover {
		transform: scale(1.1);
		z-index: 1;
	}

	.secao4-div-card img {
		width: 35%;
		height: auto;
	}

	.secao4-div-card h3 {

		color: #A62A2A;

	}

	/* Estilos para dispositivos móveis */
	@media (max-width: 768px) {
		.secao4-div-card {
			width: 100%;
		}
	}

	.informacoes {
		width: 100%;
	}
</style>


<div class="infocurso">
	<h2>Informações sobre o curso </h2>
</div>

<div class="informacoes">
<section class="secao4" id="sobre">
	<div class="secao4-div">
		<!-- Card 1 -->
		<div class="secao4-div-card">

			<h3>Curso: </h3>
			<img class="imagemevento" src="/imageseventos/{{$evento->imagemevento}}" class="img-fluid" alt="{{$evento->nomecurso}}"> <br>

			<p>{{$evento->nomecurso}}</p>
		</div>

		<!-- Card 2 -->
		<div class="secao4-div-card descricao">

			<h3>Detalhes Estruturais:</h3>
			<ul id="items-list">
				@foreach($evento->itensevento as $item)
				<li><ion-icon name="play-outline"></ion-icon><span>{{$item}}</span></li>
				@endforeach
			</ul>

		</div>

		<!-- Card 3 -->
		<div class="secao4-div-card">

			<h3>Informações:</h3>
			<p class="event-descricao">{{$evento->descricao}}</p>
			<p><input type="submit" class="btn1" onclick="openPopup()" value="Contratar"></p>
		</div>
	</div>

</section>
</div>



<div class="popup" id="popup">
	<!-- POPUP -->

	<form action="/eventos/join/{{$evento->id}}" method="POST">
		<br>
		<br>

		<h5>Curso: {{$evento->nomecurso}}</h5>
		<input type="hidden" name="nomecurso" value="{{$evento->nomecurso}}">

		<p class="event-city"><ion-icon name="location-outline"></ion-icon>Local: {{$evento->local}}</p>

		<p class="formato-evento"><ion-icon name="copy-outline"></ion-icon>Formato: {{$evento->formato}}</p>
		<input type="hidden" name="formato" value="{{$evento->formato}}">

		<p class="data-evento"><ion-icon name="calendar-outline"></ion-icon>Data: {{date('d/m/Y',strtotime($evento->datainicial))}} à {{date('d/m/Y',strtotime($evento->datafinal))}}</p>

		<p class="carga-horaria"><ion-icon name="hourglass-outline"></ion-icon>Carga Horária: {{$evento->cargahoraria}}hs</p>

		<input type="hidden" name="datainicial" value="{{$evento->datainicial}}">
		<input type="hidden" name="datafinal" value="{{$evento->datafinal}}">
		<input type="hidden" name="cargahoraria" value="{{$evento->cargahoraria}}">

		<input type="hidden" name="nomealuno" value="{{auth()->user()->nome}}">
		<input type="hidden" name="user_id" value="{{auth()->user()->id}}">
		<input type="hidden" name="evento_id" value="{{$evento->id}}">

		<p class="data-evento"><ion-icon name="calendar-outline"></ion-icon>Dias da Semana: {{($evento->diassemana)}}</p>


		<p class="event-hora"><ion-icon name="alarm-outline"></ion-icon>Horário: {{date('H:i',strtotime($evento->horainicial))}}hs às {{date('H:i',strtotime($evento->horafinal))}}hs</p>
		<input type="hidden" name="horainicial" value="{{$evento->horainicial}}">
		<input type="hidden" name="horafinal" value="{{$evento->horafinal}}">


		<p class="periodo-evento"><ion-icon name="contrast-outline"></ion-icon>Período: {{$evento->periodo}}</p>
		<input type="hidden" name="periodo" value="{{$evento->periodo}}">
		<input type="hidden" name="status" value="Pré Reserva">


		<p class="events-valor" id="events-valor"><ion-icon name="cash-outline"></ion-icon>Valor: R$<b> {{number_format($evento->valorevento,'2',',','.')}}</b></p>
		<input type="hidden" name="valorevento" value="{{$evento->valorevento}}">

		@csrf
		<input type="submit" class="btn " value="Confirmar Participação">
		<br>

		<button type="button" onclick="closePopup()" class="buttonfechar">Fechar</button>


</div>
</div>

</form>



<script>
	let popup = document.getElementById("popup");

	function openPopup() {
		popup.classList.add("open-popup")
	}

	function closePopup() {
		popup.classList.remove("open-popup")
	}
</script>






@endsection