@section('title', 'Usuário')
@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 mt-5">
        <div class=" shadow p-3 mb-5 bg-white rounded">
          <div class="row">
            <div class="col-md-12 mb-5 text-user">
              <h1>Informações do usuário</h1>
            </div>
            <div class="col-md-6">
              <p><strong>Nome: </strong> {{$usuario['nome']}}</p>
              <p><strong>CPF: </strong> {{$usuario['cpf']}}</p>
              <p><strong>Data Nascimento: </strong> {{$usuario['dataNasc']}}</p>
              <p><strong>Email: </strong>{{$usuario['email']}}</p>
            </div>
            <div class="col-md-6">
              <p><strong>Tefone: </strong> {{$usuario['telefone']}}</p>
              <p><strong>Endereço: </strong>{{$usuario['endereco']}}</p>
              <p><strong>Cidade: </strong> {{$usuario['cidade']}}</p>
              <p><strong>Estado: </strong> {{$usuario['estado']}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection