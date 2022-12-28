@extends('layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Criar novo produto</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="POST">
        @csrf
        <label>Nome</label><br>
        <input type="text" name="nome" id="nome" class="form-control"><br>
  <label>Preço</label><br>
  <input type="text" name="preco" id="preco" class="form-control"><br>
  <input type="submit" value="Salvar" class="btn btn-success"><br>
  </form>

</div>
</div>

@stop