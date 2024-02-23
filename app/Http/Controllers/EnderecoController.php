<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EnderecoController extends Controller
{
    public function buscarEndereco(Request $request)
    {
        $cep = $request->input('cep');
        $empresa = Empresa::where('cep', $cep)->first();

        if ($empresa) {
            $endereco = [
                'nome_cliente' => $empresa->nome_cliente,
                'rua' => $empresa->rua,
                'bairro' => $empresa->bairro,
                'cidade' => $empresa->cidade,
                'estado' => $empresa->estado
            ];

            return response()->json($endereco, 200);
        } else {
            return response()->json(['error' => 'Endereço não encontrado'], 404);
        }
    }
}
