<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

    public function contato(Request $request)
    {

        // $contato = new SiteContato();
        // $contato->name = $request->input('name');
        // $contato->phone = $request->input('phone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        // //print_r($contato->getAttributes());
        // $contato->save();

        $contato = new SiteContato();
        $contato->fill($request->all());
        // print_r($contato->getAttributes());
        $contato->save();


        return view("site.contato", ['titulo' => 'contato (teste)']);
    }
}
