<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::with('cliente','cidade')->where('ativo', 1)->get();
        // return $pedidos;
        return view('pedidos', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $dados)
    {
        // return $dados;
        $pedido = Pedido::create([
            'id_cliente' => $dados->id_cliente,
            'id_cidade' => $dados->id_cidade,
            'data_entrega' => $dados->data_entrega,
            'valor_frete' => $dados->valor_frete,
        ]);

        if ($pedido) {
            return redirect()->route('createPedido.index')->with('adicionado', 'Pedido adicionado com sucesso!');
        } else {
            return redirect()->route('createPedido.index')->with('erro', 'Ocorreu um erro ao adicionar o pedido.');
        }

        return redirect()->route('cliente.index')->with('adicionado', 'Pedido adicionar com sucesso!');
    }

    public function remove(Request $request){
        $id = $request->input('id');
        Pedido::where('id', $id)->update(['ativo' => 0]);
        return redirect()->route('pedidos.index')->with('removido', 'O pedido foi removido  com sucesso!');
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
    public function show(int $id)
    {

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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}