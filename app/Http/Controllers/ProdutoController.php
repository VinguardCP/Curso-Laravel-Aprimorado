<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Str;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return "index";
        //$produtos = Produto::paginate(20);
        //return view('home', compact('produtos'));

        $produtos = Produto::paginate(10);
        $categorias = Categoria::all();
        return view("admin.produtos", compact("produtos", "categorias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = $request->all();

        if (
            $request->hasFile("imagem") &&
            $request->file("imagem")->isValid()
        ) {
            $produto["imagem"] = $request
                ->file("imagem")
                ->store("produtos", "public");
        }
        $produto["slug"] = Str::slug($request->nome);

        Produto::create($produto);

        return redirect()
            ->route("admin.produtos")
            ->with("sucessso", "Produto cadastrado com sucesso");
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
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()
            ->route("admin.produtos")
            ->with("sucesso", "Produto removido com sucesso");
    }
}
