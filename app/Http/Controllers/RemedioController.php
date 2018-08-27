<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\remedios;
use App\Requests\remediosRequest;
use Illuminate\Support\Facades\DB;
class RemedioController extends Controller
{
    public function lista() {
        $remedios = remedios::all();
        return view('auth.listaRemedios')->with('remedios', $remedios);
    }

    public function new (Request $request) {
        $params = $request->all();
        remedios::create($params);   
        return redirect()->action('RemedioController@lista');
    }
    
    public function remove($id) {
        $remedios = remedios::find($id);
        $remedios->delete();
        return redirect()->action('RemedioController@lista');
    }
}
