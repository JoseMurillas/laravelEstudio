<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresetationController extends Controller
{
    public function dato($nombre,$apellido,$edad){
        return "Su nombre es: $nombre, su apellido es: $apellido y su edad es: $edad";
    }
}
