<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\funcionarios;
use App\Requests\funcionariosRequest;
use Illuminate\Support\Facades\DB;
class funcController extends Controller
{
     public function __construct()
    {
        $this->middleware('guest');
    }

       public function user()
    {
        return view('index');
    }
    public function cadastro(Request $request) {
         $params = $request->all();
        funcionarios::create($params);   
         return redirect()->action('IdosoController@lista');
    }
}
