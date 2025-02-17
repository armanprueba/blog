<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('listado', compact('libros'));
    }
/**
* Display the specified resource.
*/

    public function store(Request $request)
    {

    }
    public function show(string $id)
    {
    //
    return "Mostrando ficha de libro $id";
    }
    public function destroy($id)
    {
    Post::findOrFail($id)->delete();
    $posts = Post::get();
    return view('libros.index', compact('libros'));
    }


    public function nuevoPrueba($id)
    {
    $post = new Post();
    $post->titulo = "Titulo " + rand(2, 18);
    $post->texto = "Contenido " + rand(2, 18);

    return view('libros.index', compact('libros'));
    }
}
