@extends('layouts.mainhome')
@section('title','Testes')
@section('content')

<style>
   
 
     .popup {
			width: 400px;
			margin-top: 50px;
			background: #fff;
			border-radius: 6px;
			position: fixed;
			top: 0;
			left: 50%;
			transform: translate(-50%, -50%) scale(0.1);
			
			padding: 0 30px 30px;
			color: #333;
			visibility: hidden;
			transition: transform 0.4s, top 0.4s ;
			

			
		}

		.open-popup{
			visibility: visible;
			top: 50%;
			transform: translate(-50%, -50%) scale(1);
		}

		.popup img{

			width: 100px;
			margin-top: -50px;
			border-radius: 50%;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 2);

		}

		.popup h2{
			font-size: 38px;
			font-weight: 500;
			margin: 30px 0 10px;
			

		}

		.popup button{
			width: 100%;
			margin-top: 50px;
			padding: 10px 0;
			background: black;
			color:#fff;
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
		.sobreocurso{
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
</style>
<section class="secao4" id="sobre">
    <div class="secao4-div">
        <!-- Card 1 -->
        <div class="secao4-div-card">
           
            <h3>Curso: </h3>
            <img class="imagemevento" src="/imageseventos/" class="img-fluid" alt="">
            <p>Power BI</p>
        </div>

        <!-- Card 2 -->
        <div class="secao4-div-card descricao">
           
            <h3>Detalhes:</h3>
            <p>Descrição</p>
        </div>

        <!-- Card 3 -->
        <div class="secao4-div-card">
           
            <h3>Informações</h3>
            <p>Descrição do card 3.</p>
            <p><input type="submit" class="btn1" onclick="openPopup()" value="Contratar"></p>
        </div>
    </div>

    

    </div>
</section>
<br>




          @endsection