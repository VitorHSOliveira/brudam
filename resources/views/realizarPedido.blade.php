@extends('layout')
<div class="container mt-5" style='display: flex;flex-direction: column;align-items: center;'>
  @if($mensagem = Session::get('adicionado'))
  <div class="card text-bg-success mb-3" style="max-width: 30%;">
    <div class="card-body">
      <h5 class="card-title">Adição de Pedido</h5>
      <p class="card-text">{{$mensagem}}</p>
    </div>
  </div>
  @elseif($mensagem = Session::get('erro'))
  <div class="card text-bg-danger  mb-3" style="max-width: 30%;">
    <div class="card-body">
      <h5 class="card-title">Adição de Pedido</h5>
      <p class="card-text">{{$mensagem}}</p>
    </div>
  </div>
  @endif

  <p class="text-center  text-uppercase fs-2">Adicionar Pedido</p>
  <form action="{{route('createPedido.create')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="id_cliente" class="form-label">Selecione o Cliente</label>
      <select class="form-control" name="id_cliente" id="id_cliente" required>
        @foreach($clientes as $key)
        <option value="{{$key->id}}">{{$key->nome}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="id_cidade" class="form-label">Selecione a Cidade</label>
      <select class="form-control" name="id_cidade" id="id_cidade" required>
        @foreach($cidades as $key)
        <option value="{{$key->id}}">{{$key->nome}}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="data_entrega" class="form-label">Data para a Entrega</label>
      <input type="date" name="data_entrega" class="form-control" id="data_entrega" required>
    </div>
    <div class="mb-3">
      <label for="valor_frete" class="form-label">Valor do Frete</label>
      <input type="text" name="valor_frete" class="form-control" id="valor_frete" oninput="formatarValor(this)" required
        placeholder="Digite o valor do frete a ser cobrado...">
    </div>
    <button type="submit" class="btn btn-outline-success">Cadastrar pedido!</button>
    <a href="{{route('pedidos.index')}}"><button type="button" class="btn btn-outline-secondary">Vizualizar pedidos
        existentes!</button></a>
    <a href="{{route('rotas.index')}}"><button type="button" class="btn btn-outline-secondary">Vizualizar
        rotas!</button></a>
  </form>
</div>

<script src="js/index.js"></script>