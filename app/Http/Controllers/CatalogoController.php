<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CatalogoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();


        return view('public.catalogo', compact('produtos'));
    }
}
