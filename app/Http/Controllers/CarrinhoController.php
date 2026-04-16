<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $itens = session()->get("carrinho", []);
        return view("carrinho", compact("itens"));
    }

    public function adicionaCarrinho(Request $request)
    {
        $carrinho = session()->get("carrinho", []);

        $produto = Produto::find($request->id);

        if (!$produto) {
            return redirect()
                ->back()
                ->with("erro", "Produto não encontrado");
        }

        $id = $produto->id;

        if (isset($carrinho[$id])) {
            $carrinho[$id]["quantidade"] += $request->qnt;
        } else {
            $carrinho[$id] = [
                "nome" => $produto->nome,
                "preco" => $produto->preco,
                "quantidade" => $request->qnt,
                "imagem" => $produto->imagem,
            ];
        }

        session()->put("carrinho", $carrinho);

        return redirect()
            ->route("carrinho")
            ->with("sucesso", "Produto adicionado no carrinho!");
    }

    public function removeCarrinho(Request $request)
    {
        $carrinho = session()->get("carrinho", []);

        unset($carrinho[$request->id]);

        session()->put("carrinho", $carrinho);

        return redirect()
            ->route("carrinho")
            ->with("sucesso", "Produto removido!");
    }

    public function atualizaCarrinho(Request $request)
    {
        $carrinho = session()->get("carrinho", []);

        if (isset($carrinho[$request->id])) {
            $carrinho[$request->id]["quantidade"] = $request->quantity;
        }

        session()->put("carrinho", $carrinho);

        return redirect()
            ->route("carrinho")
            ->with("sucesso", "Quantidade atualizada!");
    }

    public function limparCarrinho()
    {
        session()->forget("carrinho");

        return redirect()
            ->route("carrinho")
            ->with("aviso", "Carrinho limpo!");
    }

    public function finalizar()
    {
        // Aqui futuramente salvaria no banco (pedido)

        session()->forget("carrinho");

        return redirect()
            ->route("carrinho")
            ->with("sucesso", "Pedido finalizado com sucesso!");
    }
}
