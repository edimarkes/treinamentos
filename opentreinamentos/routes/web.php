<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\IndexController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\ProgramadorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\AvisoController;
use GuzzleHttp\Middleware;

//Eventos
Route::get('/', [IndexController::class,'index']);
Route::get('/turmasabertas', [EventoController::class,'eventosabertos']);
Route::get('/criarcursos', [EventoController::class,'criarcursos'])->middleware('auth');


Route::get('/eventos/{id}', [EventoController::class,'show']);


Route::get('/eventos/formeditareventos/{id}', [EventoController::class,'formeditareventos']);
Route::put('/eventos/update/{id}', [EventoController::class,'alterareventos']);
Route::post('/eventos', [EventoController::class,'store']);
Route::get('/encerrados', [EventoController::class,'eventosencerrados']);
Route::get('/calendariocursos', [EventoController::class,'calendariocursos']);

//Deletar Eventos
Route::delete('/eventos/{id}',[EventoController::class,'destroy']);
Route::get('/excluircurso',[EventoController::class,'excluircurso']);

//EVENTOS CONTRATADOS
Route::get('/checkin',[EventoController::class,'checkin']);
Route::get('/checkin/id',[EventoController::class,'checkinaluno']);
Route::get('/checkinpainelaluno/{id}',[EventoController::class,'checkinpainelaluno']);


//FORMULÁRIO MUDAR STATUS CHECKIN
Route::get('eventos/formstatuscheckin/{id}', [EventoController::class,'formstatuscheckin']);
Route::put('/checkin/update/{id}', [EventoController::class,'alteracheckin']);




//DELETAR CURSO CONTRATADO
Route::delete('/deletareventocontratado/{id}',[EventoController::class,'destroy_checkinpagamento']);
Route::delete('/deletarcheckinpainel/{id}',[EventoController::class,'destroy_checkinpainel']);





//=====================================================================
//Páginas
Route::get('/office', function () {
    return view('office');
});
Route::get('/programacao', function () {
    return view('programacao');

});
Route::get('/apps', function () {
    return view('apps');
});

Route::get('/dados', function () {
    return view('dados');
});



Route::get('/trilhas',[EventoController::class,'trilhas']);
Route::get('/gestaodetrilhas',[EventoController::class,'gestaodetrilhas']);
Route::post('/salvatrilhas',[EventoController::class,'salvatrilhas']);
Route::get('/editartrilhas/{id}',[EventoController::class,'editartrilha']);
Route::delete('/deletatrilha/{id}',[EventoController::class,'destroytrilha']);
Route::put('/alteratrilha/{id}',[EventoController::class,'alteratrilha']);


Route::get('/testes',[UserController::class,'testecodigos']);
Route::get('/teste3',[UserController::class,'teste3']);
Route::get('/testelayout',[UserController::class,'testelayout']);
Route::get('/paginaembranco',[UserController::class,'paginaembranco']);


Route::get('/outsourcing', function () {
    return view('outsourcing');
});


Route::get('/trabalheconosco', function () {
    return view('/trabalheconosco');
});

//===============================================
//************Formulário de Contato **********/
Route::get('/contato', function () {
    return view('contato');

});
Route::post('/processaemail',[ContatoController::class,'processaemail']);
Route::get('/formulariofaleconosco',[ParticipanteController::class,'formulariofaleconosco']);

//****************************************************/




Route::get('detalhesmain/{id}',[EventoController::class,'detalhesmain']);





Route::get('/terceiriza', function () {
    return view('/terceiriza');
});
Route::get('/treinamentosincompany', function () {
    return view('/incompany');
});

Route::get('/cadastrodealuno', function () {
    return view('/formularios/formcadastroaluno');
});
//----------------  CURSOS GERAIS ----------------------------//
Route::get('/naodisponivel',[CursoController::class,'naodisponivel']);
Route::get('/excel',[CursoController::class,'excel']);
Route::get('/excelavancado',[CursoController::class,'excelavancado']);
Route::get('/powerbi',[CursoController::class,'powerbi']);
Route::get('/word',[CursoController::class,'word']);
Route::get('/powerpoint',[CursoController::class,'powerpoint']);
Route::get('/pacoteoffice',[CursoController::class,'pacoteoffice']);
Route::get('/logicadeprogramacao',[CursoController::class,'logicadeprogramacao']);
Route::get('/frontend',[CursoController::class,'frontend']);

Route::get('/csharp',[CursoController::class,'csharp']);
Route::get('/java',[CursoController::class,'java']);
Route::get('/javascript',[CursoController::class,'javascript']);
Route::get('/php',[CursoController::class,'php']);
Route::get('/python',[CursoController::class,'python']);
Route::get('/laravel',[CursoController::class,'laravel']);
Route::get('/sql',[CursoController::class,'sql']);
Route::get('/dataanalytics',[CursoController::class,'dataanalytics']);
Route::get('/cientistadedados',[CursoController::class,'cientistadedados']);
Route::get('/kotlin',[CursoController::class,'kotlin']);
Route::get('/swifit',[CursoController::class,'swifit']);
Route::get('/flutter',[CursoController::class,'flutter']);
Route::get('/project',[CursoController::class,'project']);
Route::get('/redeseinfra',[CursoController::class,'redeseinfra']);
Route::get('/marketingdigital',[CursoController::class,'marketingdigital']);
Route::get('/arteedesign',[CursoController::class,'arteedesign']);
Route::get('/testesunitarios',[CursoController::class,'testesunitarios']);
Route::get('/contabilidade',[CursoController::class,'contabilidade']);
Route::get('/gestaodenegocios',[CursoController::class,'gestaodenegocios']);
Route::get('/games',[CursoController::class,'games']);
Route::get('/ingles',[CursoController::class,'ingles']);
Route::get('/programacaomobile', function () {
    return view('/cursos/cursosgerais/mobile');
});



//=========================================================
//FORMULÁRIO PESQUISA TURMAS
Route::get('pesquisaturmas/{id}',[EventoController::class,'pesquisaturmas']);





//======================================================

//Admin
Route::get('/gestoreventos',[EventoController::class,'gestoreventos'])->Middleware('admin');
Route::get('/painelusuario',[UserController::class,'painelusuario'])->Middleware('usuario');
Route::get('/telaloginadmin',[UserController::class,'telaloginadmin']);
Route::get('/telaloginusuario',[UserController::class,'telaloginusuario']);
Route::get('/registro',[UserController::class,'registro']);
Route::post('/registeruser',[UserController::class,'cad_user']);
Route::post('/autenticausuario',[UserController::class,'autenticausuario']);
Route::post('/autenticaadmin',[UserController::class,'autenticaadmin']);

Route::get('/logoutadmin',[UserController::class,'logoutadmin']);
Route::get('/logoutusuario',[UserController::class,'logoutusuario']);
Route::get('/logoutlogado',[ParticipanteController::class,'logoutlogado']);

Route::get('/listadeusuarios',[UserController::class,'listadeusuarios']);

Route::get('/usuarios/editarusuarios/{id}',[UserController::class,'alterausuario']);
Route::put('/usuarios/updateusuario/{id}',[UserController::class,'updateusuario']);

Route::put('/alteraimagemperfilusuario/{id}',[UserController::class,'alteraimagemperfilusuario']);


Route::delete('/deletausuario/{id}',[UserController::class,'destroy_usuario']);

//Notificações 
Route::get('/notificacoes',[AvisoController::class,'index']);
Route::get('/notificacoes',[AvisoController::class,'create']);
Route::get('/editanotificacao/{id}',[AvisoController::class,'edit']);
Route::put('/updatenotificacao/{id}',[AvisoController::class,'update']);
Route::delete('/deletanotificacao/{id}',[AvisoController::class,'destroy']);
Route::post('/cadastranotificacao',[AvisoController::class,'store']);




//Participantes - Alunos

Route::get('/login',[ParticipanteController::class,'clientelogin']);
Route::get('/participantes/cadastro',[ParticipanteController::class,'participante']);



Route::post('/participantes',[ParticipanteController::class,'storeparticipante']);

Route::post('/autenticaparticipante',[ParticipanteController::class,'autenticaparticipante']);

Route::get('/logoutparticipante',[ParticipanteController::class,'logoutparticipante']);

Route::get('/participantes/dashboard/',[ParticipanteController::class,'dashboard'])->Middleware('auth');

Route::get('/paineldoaluno',[ParticipanteController::class,'paineldoaluno']);
Route::get('/cursoscontratados/{id}',[ParticipanteController::class,'cursoscontratados']);








Route::match(['get','post'],'/eventos/join/{id}',[EventoController::class,'joinEvento']);


Route::get('/listadealunos',[ParticipanteController::class,'listadealunos']);

Route::get('/editarparticipante/{id}',[ParticipanteController::class,'editarparticipante']);

Route::put('/alteraaluno/{id}',[ParticipanteController::class,'updateparticipante']);

Route::put('/alteraimagemperfilaluno/{id}',[ParticipanteController::class,'alteraimagemperfilaluno']);

Route::put('/participantes/update/{id}',[ParticipanteController::class,'updatepelogestor']);

Route::delete('/deletaparticipante/{id}',[ParticipanteController::class,'destroy_participante']);

Route::get('/participantes/alteradados/{id}',[ParticipanteController::class,'alteradados']);

Route::get('/participantes/deletarcontratados',[ParticipanteController::class,'deletarcontratados']);


// PROGRAMADORES


Route::get('/programadores/formtrabalheaqui',[ProgramadorController::class,'createtrabalheaqui']);
Route::post('/cadastraprogramador',[ProgramadorController::class,'storeprogramador']);


Route::get('/listadeprogramadores',[ProgramadorController::class,'listadeprogramadores']);

Route::get('/programadores/formeditaprogramador/{id}',[ProgramadorController::class,'showprogramador']);
Route::put('/programadores/updateprogramador/{id}',[ProgramadorController::class,'updateprogramador']);

Route::get('programadores/detalhesprogramador/{id}', [ProgramadorController::class,'detalhesprogramador']);

Route::delete('/deletaprogramador/{id}',[ProgramadorController::class,'destroy_programador']);

Route::get('/download/{id}',[ProgramadorController::class,'download']);
Route::get('/bemvindo',[ProgramadorController::class,'bemvindo']);


Route::get('/formtrabalheaqui',[UserController::class,'trabalheconosco']);












//Juntando tabela evento com tabela participante
