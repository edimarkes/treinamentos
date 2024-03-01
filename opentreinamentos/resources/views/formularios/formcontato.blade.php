@extends('layouts.main')
@section('title','Contato')
@section('content') 
       
         
 




       <!-- section -->
         <div class="section contact_section">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 theme_color_bg fc3726 padding_0">
                     <div class="full">
                        <div class="row">

                           <div class="col-sm-12 col-md-10 offset-lg-1">
                              <div class="full contact_form">
                                 <form class="contact_form_inner" action="#">
                                    @csrf
                                    <h1><font color="#FC3726">FORMULÁRIO DE INTERESSE:</font></h1>
                                    <p>*Envie as informações abaixo e aguarde nosso contato.
                                    Se preferir, pode falar via chat, ou enviar whatsapp no número no final da página.</p>
                                    <fieldset>
                                       <div class="field">
                                          <input type="text" name="name" placeholder=" Digite seu nome e sobrenome aqui" />
                                       </div>
                                        <div class="field">
                                          <input type="text" name="name" placeholder="Digite o nome da sua empresa aqui" />
                                       </div>
                                       <div class="field">
                                          <input type="email" name="email" placeholder="Digite seu Email aqui" />
                                       </div>
                                       <div class="field">
                                     
                                           <input type="text" class="form-control" id="telefone" maxlength="15" placeholder="Seu Telefone com ddd aqui" name="fonecontato">
                                       </div>

                                       <div class="field">
                                     
                                          <label>Escolha Abaixo o Assunto:</label>
                                           <select type="text" class="form-control" id="telefone" maxlength="15" placeholder="Telefone com ddd" name="fonecontato">
                                             <option>Selecione....</option>
                                             <option>Pacote Office</option>
                                             <option>Power BI</option>
                                             <option>Lógica de Programação</option>
                                             <option>Outsourcing</option>
                                            <option>SQL</option>
                                             
                                             <option>Curso/Treinamento Turma Aberta</option>
                                             <option>Curso/Treinamento InCompany</option>
                                             <option>Outro Assunto</option>
                                           
                                            
                                           </select>
                                       </div>

                                       <div class="field">
                                          <textarea placeholder="Faça um resumo da necessidade ou o que você procura aqui"></textarea>
                                       </div>
                                       <br>
                                       <div class="field center">
                                          <button class="margin-top_30">Enviar</button>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 padding_0">
                     <div class="full">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="full map_section">
                                 <div id="map">
                                    <div id="googleMap" style="width:100%;height:960px;"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
       
         

       
@endsection