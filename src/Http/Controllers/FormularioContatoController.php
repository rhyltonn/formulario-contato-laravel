<?php

namespace Rhyltonn\FormularioContato\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Rhyltonn\FormularioContato\Model\FormularioContato;

class FormularioContatoController extends Controller {

    public function index()
    {
        return view('formulario-contato::contato');
    }

    public function enviarEmail()
    {

    }
}