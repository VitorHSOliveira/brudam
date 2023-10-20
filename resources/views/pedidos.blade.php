@extends('layout')

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container mt-5">
    <!-- mensagem de retorno da api -->
    @if($mensagem = Session::get('removido'))
    <div class="card text-bg-warning mb-3" style="max-width: 30%;">
      <div class="card-body">
        <h5 class="card-title">Remoção de Pedido</h5>
        <p class="card-text">{{$mensagem}}</p>
      </div>
    </div>
    @endif

    <p class="text-center  text-uppercase fs-2">Todos os Pedidos</p>
    <table class="table table-responsive table-bordered border-dark table-hover text-center text-capitalize">
      <thead>
        <tr class="table-dark table-active text-uppercase text-white hover">
          <th scope="col">#</th>
          <th scope="col">Nome do Cliente</th>
          <th scope="col">E-mail</th>
          <th scope="col">Cidade de destino</th>
          <th scope="col">Data de entrega</th>
          <th scope="col">Valor do Frete</th>
          <th scope="col">Data do pedido</th>
          <th scope="col">Editar</th>
        </tr>
      </thead>
      <tbody>
      <tbody>
        @if(count($pedidos) > 0)
        @foreach($pedidos as $key)
        <a href="https://google.com" target="_blank">
          <tr class="text-center">
            <th scope="row">{{$key->id}}</th>
            <td>{{$key->cliente->nome}}</td>
            <td>{{$key->cliente->email}}</td>
            <td>{{$key->cidade->nome}}</td>
            <td>{{date('d/m/Y', strtotime($key->data_entrega))}}</td>
            <td>{{number_format($key->valor_frete, 2, ',', '.')}}</td>
            <td>{{date('d/m/Y H:i:s', strtotime($key->created_at))}}</td>
            <td>
              <form action="{{route('pedidos.remove')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$key->id}}" name="id">
                <button type="submit" class="btn btn-outline-danger">Excluir</button>
              </form>
            </td>
          </tr>
        </a>
        @endforeach
        @else
        <tr>
          <td colspan="8">Não há pedidos disponíveis.</td>
        </tr>
        @endif
      </tbody>

      </tbody>
    </table>
    <a href="{{route('createPedido.index')}}">
      <button type="button" class="btn btn-outline-success">Criar novo pedido</button>
    </a>
  </div>
</body>

</html>