<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        // $fornecedores = ['fornecedor 1'];

        // $fornecedores = [
        //     "fornecedor" => ["nome" => "Carlitos", "peso" => 92.5, "altura" => 1.80, "salario" => 5000, "estado_civil"=> 1, "estado"=> "SP", "ano_nascimento" => 1994],
        // ];

        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N']
        ];

        return View('app.fornecedor.index', compact('fornecedores'));
    }
}
