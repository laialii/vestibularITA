<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio(){
      return view('home');
    }
    public function inscricoes(){
      return view('inscricoes');
    }
    public function inscricao(){
      return view('inscricao');
    }
    public function localidades(){
      return view('localidades');
    }
    public function engenharias(){
      return view('engenharias');
    }
    public function tabelas(){
      return view('tabelas');
    }
    public function galeria(){
      return view('galeria');
    }
    public function contato(){
      return view('contato');
    }
}
