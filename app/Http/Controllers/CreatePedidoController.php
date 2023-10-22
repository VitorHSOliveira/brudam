<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreatePedido;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ClienteController;


class CreatePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientesController = app(ClienteController::class);
        $clientes = $clientesController->index();
        $cidadeController = app(CidadeController::class);
        $cidades = $cidadeController->index();
         return view('realizarPedido', compact('clientes','cidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $dados)
    {
    // return $dados;
    $pedido = CreatePedido::create([
        'id_cliente' => $dados->id_cliente,
        'id_cidade' => $dados->id_cidade,
        'data_entrega' => $dados->data_entrega,
        'valor_frete' => $dados->valor_frete,
    ]);

    $dataHoje = date('Y-m-d');
    $dataEntrega = $dados->data_entrega;

    if ($dataEntrega < $dataHoje) {
        return redirect()->route('createPedido.index')->with('erro', 'A data de entrega não pode ser anterior à data de hoje.');
    }

    if ($pedido) {
        return redirect()->route('createPedido.index')->with('adicionado', 'Pedido adicionado com sucesso!');
    } else {
        return redirect()->route('createPedido.index')->with('erro', 'Ocorreu um erro ao adicionar o pedido.');
    }

    return redirect()->route('cliente.index')->with('adicionado', 'Pedido adicionado com sucesso!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}