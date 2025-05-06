<?php

  namespace App\Http\Controllers;

  use App\Models\Usuario;
  use Request;

  class ReservasControllers 
  {
    public function index () {
        return view('usuario.create');
    }

    public function store (Request $request) {
      Usuario::create([
        'nome' => $request->nome,
        'idade' => $request->idade
      ]);
    }
  }
?>