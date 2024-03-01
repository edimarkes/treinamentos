@extends('layouts.mainprincipal')
@section('title','Trabalhe Aqui Conosco')
@section('content')

<br>
<div class="container">
	<div class="formcadastro">
		<h2>Formulário de Cadastro - Desenvolvedor e Instrutor</h2>
	</div>
	<form action="/cadastraprogramador" method="POST" enctype="multipart/form-data">
		{!! csrf_field() !!}


		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputName">Nome:</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required="required">
			</div>
		</div>


		<div class="form-row">

			<div class="form-group col-md-3">
				<label for="inputEmail">E-mail</label>
				<input type="text" class="form-control" id="email" placeholder="E-mail principal" name="email" required="required">
			</div>


			<div class="form-group col-md-3">
				<label for="inputUf">Telefone</label>
				<input type="text" class="form-control" id="fone" placeholder="Telefone com ddd" name="fone"  OnKeyPress="formatar('(##) #####-####',this)" required="required"  maxlength="15">
			</div>
			<div class="form-group col-md-3">
				<label for="inputrg">RG</label>
				<input type="text" class="form-control" placeholder="Seu RG " id="rg" name="rg">

			</div>
			<div class="form-group col-md-3">
				<label for="inputrg">CPF</label>
				<input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##',this)">

			</div>
			


		</div>




		<div class="form-row">
			<div class="form-group col-md-2">
				<label for="inputCep">Cep</label>
				<input type="text" class="form-control" id="cep" name="cep" maxlength="9" OnKeyPress="formatar('#####-###',this)" required="required">
			</div>

			<div class="form-group col-md-8">
				<label for="inputEndereco">Endereço</label>
				<input type="text" class="form-control" id="logradouro" name="logradouro" required="required">
			</div>

			<div class="form-group col-md-2">
				<label for="inputNumber">Número</label>
				<input type="text" class="form-control" id="numero" placeholder="numero" name="numero" required="required">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="inputBairro">Bairro</label>
				<input type="text" class="form-control" id="bairro" name="bairro" required="required">
			</div>
			<div class="form-group col-md-3">
				<label for="inputComplemento">Complemento</label>
				<input type="text" class="form-control" id="complemento" name="complemento">

			</div>
			<div class="form-group col-md-4">
				<label for="inputCity">Cidade</label>
				<input type="text" class="form-control" id="cidade" name="cidade" required="required">

			</div>
			<div class="form-group col-md-2">
				<label for="inputUf">Estado</label>
				<input type="text" class="form-control" id="estado" name="estado" required="required">
			</div>
		</div>
		<div class="form-row">

			

			<div class="form-group col-md-4">
				<label for="inputEmail4">Escolaridade</label>
				<select for="inputEmail4" class="form-control" name="escolaridade" required="required">
					<option value="" disabled selected>Escolher...</option>
					<option value="Ensino Médio Completo">Ensino Médio Completo</option>
					<option value="Superior Completo">Superior Completo</option>
					<option value="Pós Graduação">Pós Graduação</option>
					<option value="MBA">MBA</option>
					<option value="Superior Incompleto">Superior Incompleto</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="datanascimento">Data Nascimento</label>
				<input type="date" name="datanascimento" class="form-control" id="datanascimento" required="required">
			</div>

			<div class="form-group col-md-4">
				<label for="experiencia">Nível de Experiência</label>
				<select for="experiencia" class="form-control" name="experiencia" required="required">
					<option value="" disabled selected>Escolher...</option>
					<option value="Junior">Junior</option>
					<option value="Pleno">Pleno</option>
					<option value="Senior">Sênior</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="pj">Aceita PJ</label>
				<select id="pj" class="form-control" name="pj" required="required">
					<option value="Sim" selected>Sim</option>
					<option value="Não">Não</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="freelance">Aceita Freelance</label>
				<select id="freelance" class="form-control" name="freelance" required="required">
					<option value="Sim" selected>Sim</option>
					<option value="Não">Não</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="profissional">Profissional</label>
				<select id="profissional" class="form-control" name="profissional" required="required">
					<option value="Desenvolvedor" selected>Desenvolvedor</option>
					<option value="Instrutor">Instrutor</option>
					<option value="Desenvolvedor e Instrutor">Desenvolvedor e Instrutor</option>
					<option value="Outra Função">Outra Função</option>
				</select>
			</div>
		</div>
		<br>
		<div class="form-row">
		  <div class="form-group col-md-12">
		<p> <b>Linguagens e Tecnologias de Conhecimento:</b></p>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-12">
		<table>
			<tr>
				<td>


					<div class="checkbox-container01">
						<div class="form-group col-md-12">
							
						<input type="checkbox" id="cb1" value="Excel" name="conhecimento[]">
						<label for="cb1">Excel</label><br>

							

							<input type="checkbox" id="cb2" value="Word" name="conhecimento[]">
							<label for="cb2">Word</label><br>

							<input type="checkbox" id="cb3" value="Power Point" name="conhecimento[]">
							<label for="cb3">Power Point</label>

						</div>
				</td>
				<td>


					<div class="checkbox-container02">
						<div class="form-group col-md-12">
							
					 <input type="checkbox" id="cb4" value="Pacote Office" name="conhecimento[]">						
							<label for="cb4">Pacote Office</label><br>

							<input type="checkbox" id="cb5" value="Power BI" name="conhecimento[]">							
							<label for="cb5">Power BI</label><br>

							<input type="checkbox" id="cb6" value="Html5" name="conhecimento[]">
							<label for="cb6">Html5</label>
						</div>

					</div>
				</td>
			</tr>

			<tr>
				<td>


					<div class="checkbox-container03">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb7" value="Css3" name="conhecimento[]">
							<label for="cb7">Css3</label><br>
							<input type="checkbox" id="cb8" value="Games" name="conhecimento[]">
							<label for="cb8">Games</label><br>
							<input type="checkbox" id="cb9" value="Android Studio" name="conhecimento[]">
							<label for="cb9">Android Studio</label>
						</div>
				</td>
				<td>


					<div class="checkbox-container04">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb10" value="Oracle" name="conhecimento[]">
							<label for="cb10">Oracle</label><br>
							<input type="checkbox" id="cb11" value="SQL" name="conhecimento[]">
							<label for="cb11">SQL</label><br>
							<input type="checkbox" id="cb12" value="Bootstrap" name="conhecimento[]">
							<label for="cb12">Bootstrap</label>
						</div>

					</div>
			</tr>
			</td>

			<tr>
				<td>


					<div class="checkbox-container05">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb13" value="javaScript" name="conhecimento[]">
							<label for="cb13">javaScript</label><br>
							<input type="checkbox" id="cb14" value="PHP">
							<label for="cb14" name="conhecimento[]">PHP</label><br>
							<input type="checkbox" id="cb15" value="Laravel" name="conhecimento[]">
							<label for="cb15">Laravel</label>
						</div>
				</td>
				<td>


					<div class="checkbox-container06">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb16" value="Node.js" name="conhecimento[]">
							<label for="cb16">Node.js</label><br>
							<input type="checkbox" id="cb17" value="Angular" name="conhecimento[]">
							<label for="cb17">Angular</label><br>
							<input type="checkbox" id="cb18" value="Java">
							<label for="cb18" name="conhecimento[]">Java</label>
						</div>

					</div>
			</tr>
			</td>

			<tr>
				<td>


					<div class="checkbox-container07">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb19" value="CSharp" name="conhecimento[]">
							<label for="cb19">C#</label><br>
							<input type="checkbox" id="cb20" value="AspNet" name="conhecimento[]">
							<label for="cb20">.AspNet</label><br>
							<input type="checkbox" id="cb21" value="Lógica de Programação" name="conhecimento[]">
							<label for="cb21">Lógica de Programação</label>
						</div>
				</td>
				<td>


					<div class="checkbox-container08">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb22" value="Kotlin" name="conhecimento[]">
							<label for="cb22">Kotlin</label><br>
							<input type="checkbox" id="cb23" value="Flutter" name="conhecimento[]">
							<label for="cb23">Flutter</label><br>
							<input type="checkbox" id="cb24" value="Swifit - IOS" name="conhecimento[]">
							<label for="cb24">Swifit - IOS</label>
						</div>

					</div>
			</tr>
			</td>
			<tr>
				<td>


					<div class="checkbox-container03">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb25" value="Testes Unitários" name="conhecimento[]">
							<label for="cb25">Testes Unitários</label><br>
							<input type="checkbox" id="cb26" value="Cientista de Dados" name="conhecimento[]">
							<label for="cb26">Cientista de Dados</label><br>
							<input type="checkbox" id="cb27" value="Data Analytics" name="conhecimento[]">
							<label for="cb27">Data Analytics</label>
						</div>
				</td>
				<td>


					<div class="checkbox-container04">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb28" value="Python" name="conhecimento[]">
							<label for="cb28">Python</label><br>
							<input type="checkbox" id="cb29" value="Java - Spring boot" name="conhecimento[]">
							<label for="cb29">Java - Spring boot</label><br>
							<input type="checkbox" id="cb30" value="React JS" name="conhecimento[]">
							<label for="cb30">React JS</label>
						</div>

					</div>
			</tr>
			</td>

			<tr>
				<td>


					<div class="checkbox-container03">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb31" value="AWS" name="conhecimento[]">
							<label for="cb31">AWS</label><br>
							<input type="checkbox" id="cb32" value="Project" name="conhecimento[]">
							<label for="cb32">Project</label><br>
							<input type="checkbox" id="cb33" value="Marketing Digital" name="conhecimento[]">
							<label for="cb33">Marketing Digital</label>
						</div>
				</td>
				<td>


					<div class="checkbox-container04">
						<div class="form-group col-md-12">
							<input type="checkbox" id="cb34" value="Contabilidade" name="conhecimento[]">
							<label for="cb34">Contabilidade</label><br>
							<input type="checkbox" id="cb35" value="Scrum - Metodologias Ágeis" name="conhecimento[]">
							<label for="cb35">Scrum - Metodologias Ágeis</label><br>
							<input type="checkbox" id="cb36" value="Redes e Infraestrutura" name="conhecimento[]">
							<label for="cb36">Redes e Infraestrutura</label>
						</div>

					</div>
			</tr>
			</td>






			</tr>
			</td>
		</table>
		  </div>
		</div>

		
		<div class="form-row">
		  <div class="form-group col-md-12">

		<label for="curriculo"><b>Envie seu Currículo:(Utilize arquivo pdf ou word)</b> </label>
		
		<span class="btn btn-success fileinputbutton">

			<input type="file" class="form-control-file" name="curriculo" required="required">
		</span>
		
		  </div>
		</div>


          <div class="form-row">
		  <div class="form-group col-md-12">
		<button type="submit" class="btn btn-dark"><b class="colorbutton">Enviar</b></button>
		  </div>
		</div>
	</form>
</div>







@endsection