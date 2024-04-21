<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        $categories = Categorias::todas_las_categorias();
        return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    public function show($id)
    {
        return view('categoras.show')
            ->with('note', Note::nota_por_id($id));
    }
}
