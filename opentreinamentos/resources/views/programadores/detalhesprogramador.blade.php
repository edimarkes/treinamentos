@extends('layouts.detalhesmain')

@section('title','Detalhes: '. $result->nome)



@section('content')



<div class="section about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">

         



        
<br>
            <h2 style="color:#191970">Dados Pessoais</h2>
            <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputNome">Nome Completo:</label>
              <p>{{$result->nome}}</p>
            </div>
            <div class="form-group col-md-4">
                <label for="logradouro">RG</label>
                <p>{{$result->rg}}</p>
              </div>
              <div class="form-group col-md-4">
                <label for="logradouro">CPF</label>
                <p>{{$result->cpf}}</p>
              </div>
            </div>
            <hr>





            <h2 style="color:#191970">Endereço</h2>
            <div class="form-row">

              <div class="form-group col-md-4">
                <label for="cep">CEP</label>
                <p>{{$result->cep}}</p>
              </div>

              <div class="form-group col-md-4">
                <label for="logradouro">Endereço</label>
                <p>{{$result->logradouro}}</p>
              </div>
              <div class="form-group col-md-4">
                <label for="numero">Numero</label>
                <p>{{$result->numero}}</p>


              </div>

            </div>

            <div class="form-row">

              <div class="form-group col-md-3">
                <label for="cidade">Cidade</label>
               <p>{{$result->cidade}}</p>
              </div>

              <div class="form-group col-md-3">
                <label for="bairro">Bairro</label>
               <p>{{$result->bairro}}</p>
              </div>

              <div class="form-group col-md-3">
                <label for="complemento">Complemento</label>
                <p>{{$result->complemento}}</p>
              </div>





              <div class="form-group col-md-3">
                <label for="uf">Estado</label>
                <p>{{$result->estado}}</p>

              </div>           
            </div>
            <hr>


            <h2 style="color:#191970">Contato</h2>
            <div class="form-row">
            <div class="form-group col-md-4">             
            <label for="email">E-mail</label>
              
             <p>{{$result->email}}</p>
              </div>


              <div class="form-group col-md-4">
                <label for="fone">Telefone de Contato</label>
                <p>{{$result->fone}}</p>
              </div>
            </div>
            <hr>
             <h2 style="color:#191970">Formação e Experiência</h2>
            <div class="form-row">

              <div class="form-group col-md-2">
                <label for="escolaridade">Escolaridade</label>
                <p>{{$result->escolaridade}}</p>
              </div>

              <div class="form-group col-md-2">
                <label for="datanascimento">Data de Nascimento</label>
                {{date('d/m/Y',strtotime($result->datanascimento))}}
              </div>

              <div class="form-group col-md-2">
                <label for="experiencia">Experiência</label>
                <p>{{$result->experiencia}}</p>


              </div>


              <div class="form-group col-md-2">
                <label for="pj">Aceita PJ</label>
                <p>{{$result->pj}}</p>
              </div>

              <div class="form-group col-md-2">
                <label for="freelance">Aceita Freelance</label>
               <p>{{$result->freelance}}</p>
              </div>

              <div class="form-group col-md-2">
                <label for="profissional">Profissional</label>
                <p>{{$result->profissional}}</p>
              </div>
            </div>
            <hr>

            <p> <b>Linguagens e Tecnologias de Conhecimento:</b></p>


            <div class="form-check form-check-inline">

            
           
             

             <ul id="items-list">
              @foreach($result->conhecimento as $item)
              <li><ion-icon name="play-outline"></ion-icon><span>{{$item}}</span></li>
              @endforeach
             </ul>

             
              </div>


            <br>
            <br>

            <label for="curriculo"><b>Download do Currículo</b> </label>
            <br>
            <span class="btn btn-success fileinputbutton">


             
              <object data="/curriculos/{{$result->curriculo}}" alt="{{$result->curriculo}}" class="img-preview" width="400" height="50"></object>
            </span>
            <br>
            <br>

             <a href="/download/{{$result->id}}">
            <button type="submit" class="btn btn-primary">Download</button>
             </a>
          



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