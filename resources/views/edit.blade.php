@extends('layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Editar produto</div>
  <div class="card-body">
       
      <form action="{{ url('student/' .$produto->id) }}" method="post">
     {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$produto->id}}" id="id" />
     <label>Nome</label><br>
        <input type="text" name="nome" id="nome" value="{{$produto->nome}}" class="form-control"><br>
        <label>Preço</label><br>
     <input type="text" name="preco" id="preco" value="{{$produto->preco}}" class="form-control"><br>
        <input type="submit" value="Salvar" class="btn btn-success"><br>
    </form>
    
  </div>
</div>
  @stop