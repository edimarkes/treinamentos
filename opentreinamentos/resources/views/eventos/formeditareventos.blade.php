@extends('layouts.detalhesmain')

@section('title','Editar Eventos')



@section('content')
<style>
	 /* checkbox personalizado */
.checkbox {
  display: none;
}
.checkbox + label:before {
  content: '';
  display: inline-block;
  width: 1em;
  height: 1em;
  border-radius: 3px;
  margin-right: 5px;
  border: 2px solid gray;
  margin-bottom: -2px;
}
.checkbox:checked + label {
  color: gray;
}
.checkbox:checked + label:before {
  background: gray;
}

</style>


<div id="events-container" class="col-md-8 offset-md-3">
	<br>
	<h2>Editar Evento</h2>
	<form action="/eventos/update/{{$evento->id}}" method="POST" enctype="multipart/form-data">

		@csrf
		@method('PUT')

		<div class="form-group">
		<label for="inputPassword" class="col-sm-2 col-form-label">Curso</label>
                <select class="form-control form-control-lg" name="nomecurso" id="nomecurso">
                  <option value="{{$evento->nomecurso}}">{{$evento->nomecurso}}</option>
				<option value="Arte & Design">Arte & Design</option>
				<option value="Cientista de Dados">Cientista de Dados</option>
				<option value="Contabilidade">Contabilidade</option>
				<option value="CSharp">CSharp</option>
				<option value="Data Analytics">Data Analytics</option>
				<option value="Excel - Módulo I">Excel - Módulo I</option>
				<option value="Excel - Módulo II">Excel - Módulo II</option>
				<option value="Flutter">Flutter</option>
				<option value="Front End">Front End</option>
				<option value="Games">Games</option>
				<option value="Gestão de Negócios">Gestão de Negócios</option>
				<option value="Java">Java</option>
				<option value="JavaScript">JavaScript</option>
				<option value="Kotlin">Kotlin</option>
				<option value="Laravel">Laravel</option>
				<option value="Lógica de Programação">Lógica de Programação</option>
				<option value="Marketing Digital">Marketing Digital</option>
				<option value="Pacote Office">Pacote Office</option>
				<option value="PHP">PHP</option>
				<option value="Power BI">Power BI</option>
				<option value="Power Point">Power Point</option>
				<option value="Project">Project</option>
				<option value="Phyton">Phyton</option>
				<option value="Redes e Infraestrutura">Redes e Infraestrutura</option>
				<option value="SQL">SQL</option>
				<option value="Swifit">Swifit</option>
				<option value="Testes Unitários">Testes Unitários</option>
				<option value="Word">Word</option>

</select>

		</div>


		<div class="form-row">

			<div class="form-group col-md-4">
				<label for="local">Local</label>
				<input type="text" class="form-control" id="local"  name="local" value="{{$evento->local}}">
			</div>


			<div class="form-group col-md-4">
				<label for="telefone">Valor do Evento</label>
				<input type="text" step="any" class="form-control" id="valorEvento" maxlength="15" name="valorevento" value="{{$evento->valorevento}}">
			</div>
			<div class="form-group col-md-4">
				<label for="telefone">Carga Horária</label>
				<input type="text" step="any" class="form-control" id="cargahoraria" maxlength="15" name="cargahoraria" value="{{$evento->cargahoraria}}">
			</div>
		</div>


		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="datainicial">Data Inicial</label>
				<input type="date" class="form-control" id="datainicial" name="datainicial" value="{{$evento->datainicial}}">
			</div>

			<div class="form-group col-md-4">
				<label for="datatermino">Data Encerramento</label>
				<input type="date" class="form-control" id="datafinal" name="datafinal" value="{{$evento->datafinal}}">
			</div>
			<div class="form-group col-md-2">
				<label for="horainicial">Horario de Inicio</label>
				<input type="time" class="form-control" id="horainicial" name="horainicial" value="{{$evento->horainicial}}">


			</div>
			<div class="form-group col-md-2">
				<label for="horafinal">Horario Final</label>
				<input type="time" class="form-control" id="horafinal" name="horafinal" value="{{$evento->horafinal}}">


			</div>

		</div>



		<div class="form-row">
		<div class="form-group col-md-3">
			<label for="titulo">Dias da Semana:</label>
			<select name="diassemana" id="" class="form-control" required="required">
			<option value="{{$evento->diassemana}}">{{$evento->diassemana}}</option>
				<option value="Segunda à Sexta">Segunda à Sexta</option>
				<option value="Segundas, Quartas e Sextas">Segundas, Quartas e Sextas</option>
				<option value="Terças e Quintas">Terças e Quintas</option>
				<option value="Sábados Manhã">Sábados Manhã</option>
				<option value="Sábados Tarde">Sábados Tarde</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label for="titulo">Fomato:</label>
			<select name="formato" id="formato" class="form-control" required="required">
				
			     <option value="{{$evento->formato}}">{{$evento->formato}}</option>
				<option value="Presencial">Presencial</option>
				<option value="Online ao Vivo">Online ao Vivo</option>
				<option value="Online Gravado">Online Gravado</option>
				<option value="InCompany">InCompany</option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="site">Site:</label>
			<select name="site" id="tipo" class="form-control" required="required">
			
			   <option value="1" {{($evento->site === '1') ? 'Selected' : ''}}>Visivel</option>
                  <option value="0" {{($evento->site === '0') ? 'Selected' : ''}}>Não Visivel</option>
			 
			</select>
		</div>
		<div class="form-group col-md-3">
				<label for="telefone">Período</label>
				<select name="periodo" id="periodo" class="form-control">
					

					<option value="Noturno" {{($evento->periodo === 'Noturno') ? 'Selected' : ''}}>Noturno</option>
					<option value="Manha" {{($evento->periodo === 'Manha') ? 'Selected' : ''}}>Manhã</option>

					<option value="Tarde" {{($evento->periodo === 'Tarde') ? 'Selected' : ''}}>Tarde</option>

					<option value="Sábados" {{($evento->periodo === 'Sábados') ? 'Selected' : ''}}>Sábados</option>

					

					
				</select>
			</div>	
		
		</div>
		
		<div class="form-group">
			<label for="titulo">Descrição do Evento:</label>
			<textarea name="descricao" id="descrição" class="form-control" placeholder="Detalhes do Evento">{{$evento->descricao}}</textarea>
		</div>

		<div class="form-group">
			<label form="titulo-evento">Adicionar Intens do Evento</label>
		</div>

		<div class="checkbox-container01">
          <div class="form-group col-md-12">    

		<input type="checkbox" id="cb1" value="Apostila Física" name="itensevento[]">
		<label for="cb1">Apostila Física</label><br>							

           <input type="checkbox" id="cb2" value="Apostila Digital" name="itensevento[]">
          <label for="cb2">Apostila Digital</label><br>

          <input type="checkbox" id="cb3" value="Internet de Alta Velocidade" name="itensevento[]">
          <label for="cb3">Internet de Alta Velocidade</label><br>

          <input type="checkbox" id="cb4" value="PC ou Notebook" name="itensevento[]">
          <label for="cb4">PC ou Notebook</label><br>

          <input type="checkbox" id="cb5" value="Coffee Break" name="itensevento[]">
          <label for="cb5">Coffee Break</label><br>

          <input type="checkbox" id="cb6" value="Brindes" name="itensevento[]">
          <label for="cb6">Brindes</label>
		<hr>

		<p><b>Itens já gravados no banco:</b></p>
		         @foreach($evento->itensevento as $item)
				<li><ion-icon name="play-outline"></ion-icon><span>{{$item}}</span></li>
				@endforeach
		




          


           </div>
          </div>


		<span class="btn btn-success fileinputbutton">
			<input type="file" name="imagemevento">
			<img src="/imageseventos/{{$evento->imagemevento}}" alt="{{$evento->imagemevento}}" class="img-preview">
		</span>
		<br>
		<br>
		<input type="submit" class="btn btn-primary" value="Editar Evento">




	</form>


</div>




@endsection