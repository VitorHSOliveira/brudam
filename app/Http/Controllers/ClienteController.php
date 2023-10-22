<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
         return $clientes;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

}