<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class idososRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'dia' => 'required|string|min:1|max:2',
            'mes' => 'required|string|min:1|max:2',
            'ano' => 'required|string|min:4|max:4',
            'sexo' => 'required|string|min:1| max:1',
            'rg' => 'string|min:9|max:9',
            'cpf' => 'string|min:11|max:11',
            'doencap' => 'string|max:1',
            'descricaop' => 'string|max:255',
            'doencaf' => 'string|max:1',
            'descricaof' => 'string|max:255',
            'alimentacao' => 'required|string|max:1',
            'descricaoal' => 'string|max:120',
            'remedio' => 'required|string|max:100',
            'dosagem' => 'required|string|max:60',
            'horario' => 'required|string|max:5',
            'telefone1' => 'required|string|max:12',
            'telefone2' => 'string|max:12',
            'responsavel1' => 'required|string|max:255',
            'responsavel2' => 'string|max:255',
            'cep' => 'required|string|min:8|max:8',
            'rua' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:100',
            'uf' => 'required|string|min:2|max:2',
            'foto' => 'string|max:200',
            'id_entidade' => 'required|exists:id,entidade',
        ];
    }

    public function messages(){
        return [
            'nome' => $data['nome'],
            'dia' => $data['dia'],
            'mes' => $data['mes'],
            'ano' => $data['ano'],
            'sexo' => $data['sexo'],
            'rg' => $data['rg'],
            'cpf' => $data['cpf'],
            'doencap' => $data['doencap'],
            'descricaop' => $data['descricaop'],
            'doencaf' => $data['doencaf'],
            'descricaof' => $data['descricaof'],
            'alimentacao' => $data['alimentacao'],
            'descricaoal' => $data['descricaoal'],
            'remedio' => $data['remedio'],
            'dosagem' => $data['dosagem'],
            'telefone1' => $data['telefone1'],
            'telefone2' => $data['telefone2'],
            'responsavel1' => $data['responsavel1'],
            'responsavel2' => $data['responsavel2'],
            'cep' => $data['cep'],
            'cidade' => $data['cidade'],
            'rua' => $data['rua'],
            'bairro' => $data['bairro'],
            'uf' => $data['uf'],
            'foto' => $data['foto'],
            
        ];
    }
}

