<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
   public function index()
   {
    return "Bienvenidos a la web que listara los juegos comprados";
   }

   public function create()
   {
    return "Esta es la página donde se creará el formulario para dar de alta juegos, estamos utilizando un Controlador";
   }
}
