<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class funcionariosRequest extends FormRequest
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
        'name' => 'required|string|max:255',
        'sobrenome' => 'required|string|max:255', 
        'email' => 'required|string|email|max:255',
        'entidade' => 'required|string|max:200',
        'telefone' => 'required|string|min:11|max:12',
        'password' => 'required|string|min:6|confirmed',
        'sexo' => 'required|string|min:1| max:1',
        'cpf' => 'required|string|min:11|max:11',
        'rg' => 'required|string|min:9|max:9',
        'dia' => 'required|string|min:1|max:2,',
        'mes' => 'required|string|min:1|max:2,',
        'ano' => 'required|string|min:4|max:4,',
        'cep' => 'required|string|min:8|max:8',
        'rua' => 'required|string|max:255',
        'bairro' => 'required|string|max:255',
        'cidade' => 'required|string|max:100',
        'uf' => 'required|string|min:2|max:2',
    ];
}
    public function messages(){
        return [
            'name' => $data['name'],
            'sobrenome' => $data['sobrenome'], 
            'email' => $data['email'],
            'entidade' => $data['entidade'],
            'telefone' => $data['telefone'],
            'password' => Hash::make($data['password']),
            'sexo' => $data['sexo'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'dia' => $data['dia'],
            'mes' => $data['mes'],
            'ano' => $data['ano'],
            'cep' => $data['cep'],
            'rua' => $data['rua'],
            'bairro' => $data['bairro'],
            'cidade' => $data['cidade'],
            'uf' => $data['uf'],
        ];
    }
    
}
