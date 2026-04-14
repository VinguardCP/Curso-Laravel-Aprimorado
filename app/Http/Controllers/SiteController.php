<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class SiteController extends Controller
{
     public function index()
    {
        //return "index";
        $produtos = Produto::paginate(20);
        return view('home', compact('produtos'));
    }

    public function details($slug){
        $produto = Produto::where('slug', $slug)->first();
        return view('details', compact('produto'));
    }

     public function categoria($id){
        $categoria = Categoria::find($id);
        $produtos = Produto::where('id_categoria', $id)->paginate(6);
        return view('categoria', compact('produtos', 'categoria'));
    }
}
