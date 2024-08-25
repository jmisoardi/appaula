<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
   public function index(){
    return "Bienvenido a la pagina Principal";
   }
   
   public function create(){
    return "En esta pagina podrás crear un curso";
   }
   
   public function show($curso){
    return "Bienvenido a tu curso: $curso ";
   }
}
