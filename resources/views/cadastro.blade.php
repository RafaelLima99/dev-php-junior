@section('title', 'Cadastro')
@extends('layouts.main')
@section('content')

@if(session('msg-erro'))
  <div class="alert alert-danger" role="alert">
    {{ session('msg-erro') }}
  </div>
@endif  
@if(session('msg-sucesso'))
  <div class="alert alert-success" role="alert">
    {{ session('msg-sucesso') }}
  </div>
@endif  
<div class="container mt-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10  shadow p-3 mb-5 bg-white rounded">
        <div class="text-user mb-4">
          <h2>Cadastro de usuário</h2>
        </div>
        <form class="row g-3" action="usuario/insert" method="POST">
        @csrf 
          <div class="col-md-6">
            <label for="inputNome" class="form-label label-input">Nome:</label>
            <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Digite o nome">
          </div>
          <div class="col-md-4">
            <label for="inputCpf" class="form-label label-input ">CPF:</label>
            <input type="text" class="form-control" id="inputCpf" name="cpf" placeholder="000.000.000-00">
          </div>
          <div class="col-md-2">
            <label for="inputDataNasc" class="form-label label-input">Data Nascimento:</label>
            <input type="text" class="form-control" id="inputDataNasc" placeholder="dd/mm/aaaa" name="dataNasc">
          </div>
          <div class="col-md-4">
            <label for="inputCep" class="form-label label-input">Cep:</label>
            <input type="text" class="form-control" id="inputCep" name="cep" onchange="consultaCep()"
            placeholder="Digite o cep">
          </div>
          <div class="col-md-4">
            <label for="inputEstado" class="form-label label-input">Estado:</label>
            <input id="inputEstado" class="form-control" name="estado">
          </div>
          <div class="col-md-4">
            <label for="inputCidade" class="form-label label-input">Cidade:</label>
            <input id="inputCidade" class="form-control" name="cidade" readonly>
          </div>
          <div class="col-md-4">
            <label for="inputTelefone" class="form-label label-input">Telefone:</label>
            <input type="text" class="form-control" id="inputTelefone" name="telefone" placeholder="(00)0000-0000">
          </div>
          <div class="col-md-4">
            <label for="inputEmail" class="form-label label-input">Email:</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Digite o email">
          </div>
          <div class="col-md-4">
            <label for="inputEndereco" class="form-label label-input">Endereço:</label>
            <input type="text" class="form-control" id="inputEndereco" name="endereco" placeholder="Digite o endereço">
          </div>
          <div class="col-12 mt-5">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection