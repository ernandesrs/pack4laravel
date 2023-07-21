<?php

namespace ErnandesRS\Pack4Laravel\Http\Controllers;

use App\Http\Controllers\Controller;

class Pack4LaravelController extends Controller
{
    public function index()
    {
        return view('pack4laravel::jujubas', ['opa' => "EAE, VARIÁVEL 'opa' AQUI!!!"]);
    }
}