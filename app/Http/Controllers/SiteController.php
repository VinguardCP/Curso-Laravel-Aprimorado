<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

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
}
