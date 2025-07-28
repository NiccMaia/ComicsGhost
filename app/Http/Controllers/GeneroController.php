<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
    public function index()
    {
        // Aqui buscamos todos os gêneros do banco
        $generos = Genero::all();

        // Aqui retornamos a view 'generos.blade.php' e passamos a variável $generos
        return view('generos', compact('generos'));
    }
}
