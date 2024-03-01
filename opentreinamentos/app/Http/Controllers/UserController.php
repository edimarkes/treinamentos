<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;


use App\Models\User;



class UserController extends Controller
{
    use ValidatesRequests;



    public function telaloginadmin()
    {

        return view('/painel-login/telaloginadmin');
    }
    public function telaloginusuario()
    {

        return view('/painel-login/telaloginusuario');
    }
    public function registro()
    {

        return view('/painel-login/registro');
    }
    public function cad_user(Request $request)
    {

        $auth = new User;
        $auth->nivelusuario = $request->nivelusuario;
        $auth->nome = $request->nome;
        $auth->email = $request->email;
        $auth->rg = $request->rg;
        $auth->cpf = $request->cpf;
        $auth->telefone = $request->telefone;
        $auth->password = $request->password;
        $auth->imagemusuario = 'nickimage.png';



        $auth->save();

        return redirect('/telaloginadmin')->with('msg', "Usuário Cadastrado com Sucesso!");
    }
    public function autenticausuario(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [

            'email.required' => 'Campo e-mail é obrigatório',
            'password.required' => 'Campo senha é obrigatório',


        ]);

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('/painelusuario')->with('msg', 'Você está Logado');;
        } else {
            return redirect()->back()->with('msg', 'Email ou senha inválidos');
        }
    }


    public function painelusuario()
    {

        $eventos = Evento::all();

        $data = ['LoggedUserInfo' => Evento::where('id', '=', session('LoggedUser'))->first()];


        return view('painelusuario', ['eventos' => $eventos], $data);
    }

    public function autenticaadmin(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [

            'email.required' => 'Campo e-mail é obrigatório',
            'password.required' => 'Campo senha é obrigatório',


        ]);

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('/registro')->with('msg', 'Você está Logado');;
        } else {
            return redirect()->back()->with('msg', 'Email ou senha inválidos');
        }
    }

    public function logoutadmin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/telaloginadmin');
    }
    public function logoutusuario(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/telaloginusuario');
    }   

    public function listadeusuarios() {
        $buscandousuario = User::all();        

        return view('/usuarios/listadeusuarios', ['buscandousuario' => $buscandousuario]); 
                   

    }

    public function alterausuario($id)
    {
        $usuario = User::findOrFail($id);

        return view('/usuarios/editarusuarios', ['usuario' => $usuario]);
    }



    public function updateusuario(Request $request, $id)
    {

        $usuario = User::findOrFail($id);       
        $usuario->nivelusuario = $request->nivelusuario;
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->rg = $request->rg;
        $usuario->cpf = $request->cpf;
        $usuario->telefone = $request->telefone;
        $usuario->password = $request->password;
      

       
        $usuario->save();

        return redirect('/listadeusuarios')->with('msg', 'Informações Alteradas com Sucesso!!!');
    }

    public function alteraimagemperfilusuario(Request $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->imagemusuario = $request->imagemusuario;
        //Upload das imagens do evento
        if ($request->hasfile('imagemusuario') && $request->file('imagemusuario')->isValid()) {    

            $arquivo = $request->imagemusuario;
            $novoNome = 'IMAGEMUSUARIO_' . uniqid() . '.' . $arquivo->getClientOriginalExtension();
            $arquivo->move('imagesusuarios', $novoNome);
            $usuario->imagemusuario = $novoNome;
        }
        $usuario->save();

        return redirect('/gestoreventos')->with('msg', 'Informações Alteradas com Sucesso!!!');

    }


    public function destroy_usuario($id)
    {

        User::findOrFail($id)->delete();
        return redirect('/listadeusuarios')->with('msg', 'Usuário Deletado!!!');
    }

    public function trabalheconosco()
    {

        return view('formularios/formtrabalheaqui');
    }

    public function testecodigos()
    {



        return view('cursos/testecodigos');
    }

    public function teste3()
    {
        return view('/cursos/teste3');
    }

    public function testelayout()
    {
        return view('/cursos/testelayout');
    }
    public function paginaembranco()
    {
        return view('/cursos/paginaembranco');
    }
}
