@extends('layouts.main')

@section('title','Altera Dados')



@section('content')



<div class="section about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">

          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


          <form action="/cadastraprogramador" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}


            <div class="form-group">
              <label for="inputNome">Nome Completo do aluno</label>
              <input type="text" class="form-control" id="inputNome" name="nome" value="{{$infoprogramador->nome}}" required="required">
            </div>



            <div class="form-row">

              <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" ue="{{$infoprogramador->cep}}" required="required">
              </div>

              <div class="form-group col-md-6">
                <label for="logradouro">Endereço</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" ue="{{$infoprogramador->logradouro}}" required="required">
              </div>
              <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" ue="{{$infoprogramador->cidade}}" required="required">


              </div>

            </div>

            <div class="form-row">

              <div class="form-group col-md-2">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" ue="{{$infoprogramador->numero}}" name="numero" required="required">
              </div>

              <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" ue="{{$infoprogramador->bairro}}" name="bairro" required="required">
              </div>

              <div class="form-group col-md-2">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" ue="{{$infoprogramador->complemento}}" name="complemento">
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
                <label for="cpf">CPF</label>
                <input type="text" class="form-control cpf-mask" placeholder="Seu CPF" name="cpf" onkeypress="$(this).mask('000.000.000-00');" value="{{$infoprogramador->cpf}}" required="required">
              </div>
            </div>

            <div class="form-row">

              <div class="form-group col-md-6">
                <label for="inputEmail4">E-mail</label>
                <input type="email" class="form-control" id="inputEmail4" value="{{$infoprogramador->email}}" name="email" required="required">
              </div>


              <div class="form-group col-md-6">
                <label for="telefone">Telefone com ddd</label>
                <input type="text" class="form-control" id="telefone" maxlength="15" value="{{$infoprogramador->fone}}" name="fone" required="required">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="inputEmail4">Escolaridade</label>
                <select for="inputEmail4" class="form-control" name="escolaridade" value="{{$infoprogramador->escolaridade}}" required="required">
                 
                  <option value="Ensino Médio Completo" {{($infoprogramador->escolaridade === '') ? 'Selected' : ''}}>Ensino Médio Completo</option>
                  <option value="Superior Completo" {{($infoprogramador->escolaridade === 'Superior Completo') ? 'Selected' : ''}}>Superior Completo</option>
                  <option value="Pós Graduação" {{($infoprogramador->escolaridade === 'Pós Graduação') ? 'Selected' : ''}}>Pós Graduação</option>
                  <option value="MBA" {{($infoprogramador->escolaridade === 'MBA') ? 'Selected' : ''}}>MBA</option>
                  <option value="Superior Incompleto" {{($infoprogramador->escolaridade === Superior Incompleto') ? 'Selected' : ''}}>Superior Incompleto</option>
                </select>
              </div>

              <div class="form-group col-md-2">
                <label for="inputEmail4">Nível de Experiência</label>
                <select for="inputEmail4" class="form-control" name="experiencia" value="{{$infoprogramador->experiência}}" required="required">
                  <option value="1" {{($infoprogramador->experiencia === '1') ? 'Selected' : ''}}>Junior</option>

                  <option value="2" {{($infoprogramador->experiencia === '2') ? 'Selected' : ''}}>Pleno</option>

                  <option value="3" {{($infoprogramador->experiencia === '3') ? 'Selected' : ''}}>Senior</option>
                </select>
              </div>


              <div class="form-group col-md-2">
                <label for="datanascimento">Data Nascimento</label>
                <input type="date" name="datanascimento" class="form-control" id="datanascimento" value="{{$infoprogramador->datanascimento}}" required="required">
              </div>


              <div class="form-group col-md-2">
                <label for="pj">Aceita PJ</label>
                <select id="pj" class="form-control" name="pj" value="{{$infoprogramador->pj}}" required="required">
                  <option value="1" {{($infoprogramador->pj === '1') ? 'Selected' : ''}}>Sim</option>
                  <option value="0" {{($infoprogramador->pj === '0') ? 'Selected' : ''}}>Não</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="freelance">Aceita Freelance</label>
                <select id="freelance" class="form-control" name="freelance" required="required">
                  <option value="1" {{($infoprogramador->freelance === '1') ? 'Selected' : ''}}>Sim</option>
                  <option value="0" {{($infoprogramador->freelance === '0') ? 'Selected' : ''}}>Não</option>
                </select>
              </div>
            </div>

            <p> <b>Linguagens e Tecnologias de Conhecimento:</b></p>


            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Java" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox1">Java</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Node.js" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Node.js</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Kotlin" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Kotlin</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="PHP" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">PHP</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="JavaScript" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">JavaScript</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Html" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">HTML</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="CSS" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">CSS</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Python" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Python</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Power BI" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Power BI</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="SQL" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">SQL</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="Oracle" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Oracle</label>
            </div>


            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="NET" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">.NET</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="Flutter" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Flutter</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="Swift" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Swift</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="Excel" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Excel</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="Project" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Project</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox17" value="Xamarim" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Xamarim</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox18" value="Power Plataforma" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Power Plataformas</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox19" value="Bootstrap" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Bootstrap</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox20" value="Android Studio" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Android Studio</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox21" value="Scrum Métodos Ágeis" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Scrum - Métodos Ágeis</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox22" value="Gerenciamento de Projetos" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Gerenciamento de Projetos</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox22" value="Redes" name="conhecimento[]">
              <label class="form-check-label" for="inlineCheckbox2">Redes e Cabeamento</label>
            </div>
        </div>

        <br>
        <br>
        <br>

        <p> <b>Deseja atuar como:</b></p>
        <div class="form-check form-check-inline">

          <select id="atuacao" class="form-control" name="atuacao">
            <option value="1" {{($infoprogramador->atuacao === '1') ? 'Selected' : ''}}>Desenvolvedor</option>
            <option value="2" {{($infoprogramador->atuacao === '2') ? 'Selected' : ''}}>Instrutor</option>
            <option value="3" {{($infoprogramador->atuacao === '3') ? 'Selected' : ''}}>Redes e Infraestrutura</option>

          </select>
        </div>


        <br>
        <br>

        <label for="curriculo"><b>Envie seu Currículo:(Utilize arquivo pdf ou word)</b> </label>
        <br>
        <span class="btn btn-success fileinputbutton">


          <input type="file" name="curriculo" accept=".pdf, docx">
          <object data="/curriculos/{{$infoprogramador->curriculo}}" alt="{{$infoprogramador->curriculo}}" class="img-preview" width="400" height="50"></object>
        </span>









        <br>
        <br>


      </div>
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