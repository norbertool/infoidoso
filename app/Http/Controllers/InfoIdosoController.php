<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class InfoIdosoController extends Controller
{

    public function index(){
        return view ('index');
    }
    public function register(){
        return view ('auth.register');
    }
    public function registerIdoso(){
        return view ('auth.adicionar');
    }
    public function editarIdoso(){
        return view ('auth.formedita');
    }
    public function detalhesIdoso(){
        return view ('auth.detalhes');
    }
    public function registerRemedios(){
        return view ('auth.addRemedios');
    }
}
