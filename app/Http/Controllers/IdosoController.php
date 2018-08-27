<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\idosos;
use App\Requests\IdososRequest;
use Illuminate\Support\Facades\DB;
use App\funcionarios;
use App\Requests\funcionariosRequest;

class IdosoController extends Controller
{
    

    public function lista() {
        $idosos = DB::select('select * from idosos');
        return view('auth.listagem')->with('idosos', $idosos);
        //$idosos = DB::select('select * from idosos where id_entidade = ?',  $_SESSION[id_entidade]);
 
    }

    public function new (Request $request) {
        $params = $request->all();
        idosos::create($params);   
        return redirect()->action('IdosoController@lista');
    }
    
    public function remove($id) {
        $idosos = idosos::find($id);
        $idosos->delete();
        return redirect()->action('IdosoController@lista');
    }

     public function edit(Request $request, $id) {
        $idosos = idosos::find($id);
        $title ="editar idoso: {$idosos-> nome}";
        $categorys =['nome','dia','mes','ano','sexo','rg','cpf','doencap','descricaop','doencaf','descricaof','alimentacao','descricaoal','remedio','dosagem','horario','telefone1','telefone2','responsavel1','responsavel2','cep','cidade','rua','bairro','uf','foto'] ;
        
       return view ('auth.formedita', compact('title','categorys','idosos'));

    }


  public function update(Request $request) {
        $idoso = idosos::find($request->id);
        $idoso->fill($request->all());
        $idoso->save();
        return redirect()->action('IdosoController@lista');
    }


     public function show($id){
        $idosos = idosos::find($id);
        $title ="editar idoso: {$idosos-> nome}";
        $categorys =['nome','dia','mes','ano','sexo','rg','cpf','doencap','descricaop','doencaf','descricaof','alimentacao','descricaoal','remedio','dosagem','horario','telefone1','telefone2','responsavel1','responsavel2','cep','cidade','rua','bairro','uf','foto'] ;
        return view('auth.detalhes', compact('title','categorys','idosos'));
    }
    public function store(Request $request){
        $photoName = time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('avatars'), $photoName);
  }
}
