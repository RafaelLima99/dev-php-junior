<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $busca = request('busca');
        
        //verifica se busca existe e se não está vazia
        if($busca && !empty($busca)){
            $usuarios = Usuario::where('nome', 'like', '%'.$busca.'%')->get();
        }else{
            $usuarios = Usuario::all();
        }

        return view('home', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $nome     = $request->nome;
        $cpf      = $request->cpf;
        $dataNasc = $request->dataNasc;
        $email    = $request->email;
        $telefone = $request->telefone;
        $endereco = $request->endereco;
        $cidade   = $request->cidade;
        $estado   = $request->estado;
        $cep      = $request->cep;

        //verifica se as variaveis estão vazias
        if(
            !empty($nome)   && !empty($cpf)      && !empty($dataNasc)  && 
            !empty($email)  && !empty($telefone) && !empty($endereco)  && 
            !empty($cidade) && !empty($estado)   && !empty($cep)
        ){

            $usuario = new Usuario;

            $usuario->nome     = $nome;
            $usuario->cpf      = $cpf;
            $usuario->dataNasc = $dataNasc;
            $usuario->email    = $email;
            $usuario->telefone = $telefone;
            $usuario->endereco = $endereco;
            $usuario->cidade   = $cidade;
            $usuario->estado   = $estado;
            $usuario->cep      = $cep;

            $usuario->save(); 

            return redirect('/cadastro')->with('msg-sucesso', 'Usuário cadastrado com sucesso.');

        }else{
            return redirect('/cadastro')->with('msg-erro', 'Por favor! Preencha todos os campos.');
        }
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuario', ['usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('edicao', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        $nome     = $request->nome;
        $cpf      = $request->cpf;
        $dataNasc = $request->dataNasc;
        $email    = $request->email;
        $telefone = $request->telefone;
        $endereco = $request->endereco;
        $cidade   = $request->cidade;
        $estado   = $request->estado;
        $cep      = $request->cep;

        if(
            !empty($nome)   && !empty($cpf)      && !empty($dataNasc)  && 
            !empty($email)  && !empty($telefone) && !empty($endereco)  && 
            !empty($cidade) && !empty($estado)   && !empty($cep)
        ){

            $usuario = Usuario::find($id);

            $usuario->nome     = $nome;
            $usuario->cpf      = $cpf;
            $usuario->dataNasc = $dataNasc;
            $usuario->email    = $email;
            $usuario->telefone = $telefone;
            $usuario->endereco = $endereco;
            $usuario->cidade   = $cidade;
            $usuario->estado   = $estado;
            $usuario->cep      = $cep;

            $usuario->save(); 

            return redirect('/')->with('msg-sucesso', 'Usuário atualizado com sucesso.');

        }else{
            return redirect('/')->with('msg-erro', 'Por favor! Preencha todos os campos.');
        }
    }

    public function destroy($id)
    {
       $usuario = Usuario::find($id);
       $usuario->delete();

       return redirect('/');
    }
}
