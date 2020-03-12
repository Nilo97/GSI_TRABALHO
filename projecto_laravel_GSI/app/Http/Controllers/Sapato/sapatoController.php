<?php

namespace App\Http\Controllers\Sapato;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sapato;

class sapatoController extends Controller
{
    public function gravar(Request $request){


$sapato=new Sapato();
$sapato->cor=$request->cor;
$sapato->numero=$request->numero;
$sapato->marca=$request->marca;
$sapato->save();
    return view('sapato');
    }
}
