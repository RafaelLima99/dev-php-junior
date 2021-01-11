@section('title', 'Home')
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
<div class="container">
  <div class="mt-4 mb-5">
    <h1>Lista de usuários</h1>
  </div>
  <table class="table shadow p-3 mb-5 bg-white rounded">
    <thead class="table-dark">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Tefone</th>
        <th scope="col">CPF</th>
        <th scope="col">Info</th>
        <th scope="col">Editar</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
      <tr class="ts-hover">
        <td>{{$usuario['nome']}}</td>
        <td>{{$usuario['email']}}</td>
        <td>{{$usuario['telefone']}}</td>
        <td>{{$usuario['cpf']}}</td>
        <td>
          <a href="usuario/{{$usuario['id']}}" class="btn btn-sm btn-success">
            <i class="fa fa-info-circle"></i>
          </a>
        </td>
        <td>
          <a href="usuario/editar/{{$usuario['id']}}" class="btn btn-sm btn-primary">
            <i class="fas fa-edit"></i>
          </a>
        </td>
        <td>
          <a href="/usuario/delete/{{$usuario['id']}}" class="btn btn-sm btn-danger">
            <i class="fas fa-trash-alt"></i>
          </a>
        </td>
        </a>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection