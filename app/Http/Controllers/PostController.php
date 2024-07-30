<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Hola desde la pagina de crear posts";
    }

    public function create(){
        return "Aqui se procesará el formulario para crear un post";
    }

    public function store(){
        return "Aqui se mostrará el formulario para crear un post";
    }

    public function show($post){
        return "Aqui se mostrará el post: $post";
    }

    public function edit($post){
        return "Aqui se mostrará el formulario para editar el post: $post";
    }

    public function update($post){
        return "Aqui se procesara el formulario pa9ra editar el post: $post";
    }

    public function destroy($post){
        return "Aqui se va proceder a eliminar el post: $post";
    }
}
