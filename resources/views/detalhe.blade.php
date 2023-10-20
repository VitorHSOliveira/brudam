@extends('layout')

<div class="container mt-5">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome do Cliente</label>
    <input type="text" class="form-control" id="nome" value="{{$pedido->cliente->nome}}" readonly>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" value="{{$pedido->cliente->email}}" readonly>
  </div>
  <div class="mb-3">
    <label for="cidade" class="form-label">Cidade de destino</label>
    <input type="text" class="form-control" id="cidade" value="{{$pedido->cidade->nome}}" readonly>
  </div>
  <div class="mb-3">
    <label for="data-entrega" class="form-label">Selecione a nova data de entrga</label>
    <input type="date" class="form-control" id="data-entrega">
  </div>

  <div class="mb-3">
    <label for="valor-frete" class="form-label">Novo Valor do Frete</label>
    <input type="text" class="form-control" id="valor-frete" pattern="R\$\s*\d{1,3}(\.\d{3})*(,\d{2})?"></input>
  </div>
</div>