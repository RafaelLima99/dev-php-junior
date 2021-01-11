@section('title', 'Edição')
@extends('layouts.main')
@section('content')

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10  shadow p-3 mb-5 bg-white rounded">
        <div class="text-user mb-4">
          <h2>Editar de usuário</h2>
        </div>
        <form class="row g-3" action="update/{{$usuario['id']}}" method="POST">
        @csrf 
          <div class="col-md-6">
            <label for="inputNome" class="form-label label-input">Nome:</label>
            <input type="text" class="form-control" id="inputNome" name="nome" value="{{$usuario['nome']}}">
          </div>
          <div class="col-md-4">
            <label for="inputCpf" class="form-label label-input">CPF:</label>
            <input type="text" class="form-control" id="inputCpf" name="cpf" placeholder="000.000.000-00"
            value="{{$usuario['cpf']}}">
          </div>
          <div class="col-md-2">
            <label for="inputDataNasc" class="form-label label-input">Data Nascimento:</label>
            <input type="text" class="form-control" id="inputDataNasc" placeholder="dd/mm/aaaa" name="dataNasc"
            value="{{$usuario['dataNasc']}}">
          </div>
          <div class="col-md-4">
            <label for="inputCep" class="form-label label-input">Cep:</label>
            <input type="text" class="form-control" id="inputCep" name="cep" onchange="consultaCep()"
            value="{{$usuario['cep']}}">
          </div>
          <div class="col-md-4">
            <label for="inputEstado" class="form-label label-input">Estado:</label>
            <input id="inputEstado" class="form-control" name="estado" readonly value="{{$usuario['estado']}}">
          </div>
          <div class="col-md-4">
            <label for="inputCidade" class="form-label label-input">Cidade:</label>
            <input id="inputCidade" class="form-control" name="cidade" readonly value="{{$usuario['cidade']}}">
          </div>
          <div class="col-md-4">
            <label for="inputTelefone" class="form-label label-input">Telefone:</label>
            <input type="text" class="form-control" id="inputTelefone" name="telefone" placeholder="(00)0000-0000"
            value="{{$usuario['telefone']}}">
          </div>
          <div class="col-md-4">
            <label for="inputEmail" class="form-label label-input">Email:</label>
            <input type="email" class="form-control" id="inputEmail" name="email" value="{{$usuario['email']}}">
          </div>
          <div class="col-md-4">
            <label for="inputEndereco" class="form-label label-input">Endereço:</label>
            <input type="text" class="form-control" id="inputEndereco" name="endereco" value="{{$usuario['endereco']}}">
          </div>
          <div class="col-12 mt-5">
            <button type="submit" class="btn btn-success">Atualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>  
@endsection