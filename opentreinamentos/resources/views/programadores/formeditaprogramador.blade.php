@extends('layouts.detalhesmain')

@section('title','Editando: '. $infoprogramador->nome)



@section('content')



<div class="section about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">

          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>



          <form action="/programadores/updateprogramador/{{$infoprogramador->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')



            <div class="form-group">
              <label for="inputNome">Nome Completo</label>
              <input type="text" class="form-control" id="inputNome" name="nome" value="{{$infoprogramador->nome}}" required="required">
            </div>






            <div class="form-row">

              <div class="form-group col-md-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP do seu Endereço" value="{{$infoprogramador->cep}}" required="required">
              </div>

              <div class="form-group col-md-3">
                <label for="logradouro">Endereço</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{$infoprogramador->logradouro}}" required="required">
              </div>
              <div class="form-group col-md-3">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="{{$infoprogramador->cidade}}" required="required">


              </div>
              <div class="form-group col-md-3">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" value="{{$infoprogramador->numero}}" name="numero" required="required">
              </div>

            </div>

            <div class="form-row">

             

              <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" value="{{$infoprogramador->bairro}}" name="bairro" required="required">
              </div>

              <div class="form-group col-md-2">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" value="{{$infoprogramador->complemento}}" name="complemento">
              </div>





              <div class="form-group col-md-2">
                <label for="uf">Estado</label>
                <select id="uf" class="form-control" name="estado" value="{{$infoprogramador->estado}}" required="required">
                  <option value="AC">Acre</option>
                  <option value="AL">Alagoas</option>
                  <option value="AP">Amapá</option>
                  <option value="AM">Amazonas</option>
                  <option value="BA">Bahia</option>
                  <option value="CE">Ceará</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="ES">Espírito Santo</option>
                  <option value="GO">Goiás</option>
                  <option value="MA">Maranhão</option>
                  <option value="MT">Mato Grosso</option>
                  <option value="MS">Mato Grosso do Sul</option>
                  <option value="MG">Minas Gerais</option>
                  <option value="PA">Pará</option>
                  <option value="PB">Paraíba</option>
                  <option value="PR">Paraná</option>
                  <option value="PE">Pernambuco</option>
                  <option value="PI">Piauí</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RN">Rio Grande do Norte</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="RO">Rondônia</option>
                  <option value="RR">Roraima</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP" selected>São Paulo</option>
                  <option value="SE">Sergipe</option>
                  <option value="TO">Tocantins</option>
                </select>

              </div>
              <div class="form-group col-md-2">
                <label for="rg">RG</label>
                <input type="text" class="form-control cpf-mask" value="{{$infoprogramador->rg}}" name="rg"  required="required">
              </div>

              <div class="form-group col-md-2">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control cpf-mask" value="{{$infoprogramador->cpf}}" name="cpf" onkeypress="$(this).mask('000.000.000-00');" required="required">
              </div>
            </div>

            <div class="form-row">

              <div class="form-group col-md-6">
                <label for="inputEmail4">E-mail</label>
                <input type="email" class="form-control" id="inputEmail4" value="{{$infoprogramador->email}}" name="email" required="required">
              </div>


              <div class="form-group col-md-6">
                <label for="fone">Telefone com ddd</label>
                <input type="text" class="form-control" id="fone" maxlength="15" name="fone" value="{{$infoprogramador->fone}}" required="required">
              </div>
            </div>

            <div class="form-row">

              <div class="form-group col-md-2">
                <label for="escolaridade">Escolaridade</label>
                <select for="escolaridade" class="form-control" name="escolaridade" required="required">
                  <option value="Ensino Médio Completo" {{($infoprogramador->escolaridade === 'Ensino Médio Completo') ? 'Selected' : ''}}>Ensino Médio Completo</option>
                  <option value="Superior Completo" {{($infoprogramador->escolaridade === 'Superior Completo') ? 'Selected' : ''}}>Superior Completo</option>
                  <option value="Pós Graduação" {{($infoprogramador->escolaridade === 'Pós Graduação') ? 'Selected' : ''}}>Pós Graduação</option>
                  <option value="MBA" {{($infoprogramador->escolaridade === 'MBA') ? 'Selected' : ''}}>MBA</option>
                  <option value="Superior Incompleto" {{($infoprogramador->escolaridade === 'Superior Incompleto') ? 'Selected' : ''}}>Superior Incompleto</option>
                </select>
              </div>

              <div class="form-group col-md-2">
                <label for="datanascimento">Data de Nascimento</label>
                <input type="date" name="datanascimento" class="form-control" id="datanascimento" value="{{$infoprogramador->datanascimento}}" required="required">
              </div>

              <div class="form-group col-md-2">
                <label for="experiencia">Experiência</label>
                <select for="experiencia" class="form-control" name="experiencia" required="required">

                  <option value="Junior" {{($infoprogramador->experiencia === 'Junior') ? 'Selected' : ''}}>Junior</option>
                  <option value="Pleno" {{($infoprogramador->experiencia === 'Pleno') ? 'Selected' : ''}}>Pleno </option>
                  <option value="Senior" {{($infoprogramador->experiencia === 'Senior') ? 'Selected' : ''}}>Sênior</option>
                </select>


              </div>


              <div class="form-group col-md-2">
                <label for="pj">Aceita PJ</label>
                <select id="pj" class="form-control" name="pj">
                  <option value="Sim" {{($infoprogramador->pj === 'Sim') ? 'Selected' : ''}}>Sim</option>
                  <option value="Não" {{($infoprogramador->pj === 'Não') ? 'Selected' : ''}}>Não</option>
                </select>
              </div>

              <div class="form-group col-md-2">
                <label for="freelance">Aceita Freelance</label>
                <select id="freelance" class="form-control" name="freelance">
                  <option value="Sim" {{($infoprogramador->freelance === 'Sim') ? 'Selected' : ''}}>Sim</option>
                  <option value="Não" {{($infoprogramador->freelance === 'Não') ? 'Selected' : ''}}>Não</option>
                </select>
              </div>

              <div class="form-group col-md-2">
                <label for="profissional">Profissional</label>
                <select id="profissional" class="form-control" name="profissional">
                  <option value="Desenvolvedor" {{($infoprogramador->profissional === 'Desenvolvedor') ? 'Selected' : ''}}>Desenvolvedor</option>
                  <option value="Instrutor" {{($infoprogramador->profissional === 'Instrutor') ? 'Selected' : ''}}>Instrutor</option>
                  <option value="Redes e Infra" {{($infoprogramador->profissional === 'Redes e Infra') ? 'Selected' : ''}}>Redes e Infra</option>


                </select>
              </div>
            </div>

            <p> <b>Linguagens e Tecnologias de Conhecimento:</b></p>


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



              <input type="file" name="curriculo" accept=".pdf, docx">
              <object data="/curriculos/{{$infoprogramador->curriculo}}" alt="{{$infoprogramador->curriculo}}" class="img-preview" width="400" height="50"></object>
            </span>
            <br>
            <br>


            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>



          <script type="text/javascript">
            $("#cep").focusout(function() {
              //Início do Comando AJAX
              $.ajax({
                //O campo URL diz o caminho de onde virá os dados
                //É importante concatenar o valor digitado no CEP
                url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
                //Aqui você deve preencher o tipo de dados que será lido,
                //no caso, estamos lendo JSON.
                dataType: 'json',
                //SUCESS é referente a função que será executada caso
                //ele consiga ler a fonte de dados com sucesso.
                //O parâmetro dentro da função se refere ao nome da variável
                //que você vai dar para ler esse objeto.
                success: function(resposta) {
                  //Agora basta definir os valores que você deseja preencher
                  //automaticamente nos campos acima.
                  $("#logradouro").val(resposta.logradouro);
                  $("#complemento").val(resposta.complemento);
                  $("#bairro").val(resposta.bairro);
                  $("#cidade").val(resposta.localidade);
                  $("#uf").val(resposta.uf);
                  //Vamos incluir para que o Número seja focado automaticamente
                  //melhorando a experiência do usuário
                  $("#numero").focus();
                }
              });
            });
          </script>
          </body>


        </div>
      </div>
    </div>
    <div class="row">


    </div>

  </div>
</div>
</div>



<!-- end section -->


@endsection