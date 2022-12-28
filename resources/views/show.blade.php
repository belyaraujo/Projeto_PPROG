@extends('layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Ver produtos</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nome : {{ $produto->nome }}</h5>
    <p class="card-text">Preço : {{ $produto->preco }}</p>
  </div>
    <hr>
  </div>
</div>