<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**public function index(){

    }
    Cuando hay este tipo de metodos donde solo hay 1 metodo una opcion es usar
        invoke donde permite llamar una clase como una funcion.
    */

    public function __invoke()
    {
        return "Bienvenido";
    }

}
