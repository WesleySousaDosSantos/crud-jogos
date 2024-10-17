@extends('layouts.app')

@section('title', 'criação')
@section('content')
    <div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
           <h1>Crie um novo jogo</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{route('jogos-index')}}" class="btn btn-primary">Lista</a>
        </div>
    </div>
      <hr>
      <form action="{{route('jogos-store')}}" method="post">
        @csrf
        <div class="form-group">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
          </div>
          <br>
          <div class="form-group">
            <label for="nome">Categoria:</label>
            <input type="text" class="form-control" name="categoria" placeholder="Digite uma Categoria para o jogo...">
          </div>
          <br>
          <div class="form-group">
            <label for="nome">Ano de criação:</label>
            <input type="number" class="form-control" name="ano_criacao" placeholder="Ano de criação...">
          </div>
          <br>
          <div class="form-group">
            <label for="nome">Valor:</label>
            <input type="number" class="form-control" name="Valor" placeholder="Digite um valor para o jogo...">
          </div>
          <br>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
@endsection

