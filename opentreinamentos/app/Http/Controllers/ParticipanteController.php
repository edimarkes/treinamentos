<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Evento;
use App\Models\User;
use App\Models\Aviso;
use App\Models\Checkin;
use Illuminate\Support\Facades\DB;





class ParticipanteController extends Controller
{
    use ValidatesRequests;


    public function participante()
    {

        return view('/participantes/cadastro');
    }
    public function storeparticipante(Request $request)
    {

        $values = $request->all();
        $usuario = new User();
        $usuario->fill($values);
        $usuario->nivelusuario = 3;
        $usuario->bairro = $request->bairro;
        $usuario->rg = $request->rg;
        $usuario->cpf = $request->cpf;
        $usuario->imagemusuario = 'nickimage.png';

        



        $usuario->save();







        return redirect('/login')->with('msg', 'Cadastro efetuado com Sucesso')->with('msg', 'Cadastro efetuado com Sucesso');
    }

    public function autenticaparticipante(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [

            'email.required' => 'Campo e-mail é obrigatório',
            'password.required' => 'Campo senha é obrigatório',

        ]);

        $credenciais = [
            'email' => $request->email,
            'password' => $request->password
        ];



        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();

            return redirect()->intended('/paineldoaluno');
        } else {
            return redirect('/login')->withErrors(['error' => 'Email ou senha Inválido / Ou usuário não existe']);
        }
    }

    public function dashboard()   {
         $user = auth()->user();
        $eventos = $user->eventosCursos;
        return view('/participantes/dashboard', ['eventos' => $eventos])->with('Você está logado');
    }

 



    public function clientelogin()
    {
        return view('/login');
    }

    public function logoutparticipante(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

   


    public function listandoParticipantes()
    {
        $buscando = User::all();
        return view('/participantes/listadealunos', compact('buscando'));
    }

    public function listadealunos()
    {
        $buscando = User::all();
        return view('/participantes/listadealunos', compact('buscando'));
    }

    public function painelparticipante($id)
    {
        $evento = Evento::findOrFail($id);
        // $participante = Participante:: findOrFail($id);
        return view('participantes/dashboard', ['eventos' => $evento]);
    }

    public function editarparticipante($id)
    {
        $participante = User::with('endereco')->findOrFail($id);


        return view('participantes/editarparticipante', ['participante' => $participante]);
    }



    public function update(Request $request)
    {

        User::findOrFail($request->id)->update($request->all());
        
        return redirect('/listadealunos')->with('msg', 'Informações Alteradas com Sucesso!!!');
    }
    public function destroy_participante($id)
    {

        User::findOrFail($id)->delete();



        return redirect('/listadealunos')->with('msg', 'Participante Deletado!!!');
    }

    public function alteradados($id)
    {
        $participante = User::findOrFail($id);

        return view('/participantes/alteradados', ['participante' => $participante]);
    }



    public function updatepelogestor(Request $request)
    {

        User::findOrFail($request->id)->update($request->all());
        return redirect('listadealunos')->with('msg', 'Informações Alteradas com Sucesso!!!');
    }
    public function updateparticipante(Request $request, $id){        
        
        $participante = User::findOrFail($id);
        $participante->nome = $request->nome;
        $participante->email = $request->email;
        $participante->telefone = $request->telefone;
        $participante->rg = $request->rg;
        $participante->cpf = $request->cpf;
        $participante->cep = $request->cep;
        $participante->logradouro = $request->logradouro;
        $participante->numero = $request->numero;
        $participante->bairro = $request->bairro;
        $participante->complemento = $request->complemento;
        $participante->cidade = $request->cidade;
        $participante->estado = $request->estado;
        $participante->password = $request->password;
       

       

        
        $participante->save();



        return redirect('/paineldoaluno')->with('msg', 'Informações Alteradas com Sucesso!!!');
    }

    public function alteraimagemperfilaluno(Request $request, $id){
        $participante = User::findOrFail($id);
        $participante->imagemusuario = $request->imagemusuario;
        //Upload das imagens do evento
        if ($request->hasfile('imagemusuario') && $request->file('imagemusuario')->isValid()) {    

            $arquivo = $request->imagemusuario;
            $novoNome = 'IMAGEMUSUARIO_' . uniqid() . '.' . $arquivo->getClientOriginalExtension();
            $arquivo->move('imagesparticipantes', $novoNome);
            $participante->imagemusuario = $novoNome;
        }

        
        $participante->save();
        return redirect('/paineldoaluno')->with('msg', 'Image do perfil alterada com Sucesso!!!');

    }

    public function deletarcontratados()
    {
        $consulta = Checkin::all();

        return view('/participantes/deletarcontratados', ['consulta' => $consulta]);
    }
public function paineldoaluno(){

    $user = auth()->user();
    $eventos = $user->eventosCursos;
    $notificacoes = Aviso::all();
    return view('/participantes/paineldoaluno', ['eventos' => $eventos,'notificacoes'=>$notificacoes])->with('Você está logado');

   
}

public function cursoscontratados($id){
   // $user = auth()->user();
   // $eventos = $user->eventosCursos;

   $eventos = User::find($id)->eventosCheckin;

   //Soma o valor do campo valorevento
   $totalValor =  $eventos->sum('valorevento');

    //Soma o a carga horária
    $totalcargahoraria = $eventos->sum('cargahoraria');
  
    
    return view('/participantes/cursoscontratados',[
        'eventos' => $eventos,
        'totalValor'=>$totalValor,
        'totalcargahoraria'=>$totalcargahoraria
    ]);
}
  
public function formulariofaleconosco(){
    return view('participantes/formulariofaleconosco');
}


        
}
