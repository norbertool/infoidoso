<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $redirectTo = '/idosos';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255', 
            'email' => 'required|string|email|max:255|unique:users',
            'telefone' => 'required|number|min:11|max:12|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'sexo' => 'required|string|min:1| max:1',
            'cpf' => 'required|number|min:11|max:11',
            'rg' => 'required|number|min:9|max:9',
            'dia' => 'required|number|min:1|max:2,',
            'mes' => 'required|number|min:1|max:2,',
            'ano' => 'required|number|min:4|max:4,',
            'cep' => 'required|number|min:8|max:8',
            'rua' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:100',
            'uf' => 'required|string|min:2|max:2',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'sobrenome' => $data['sobrenome'], 
            'email' => $data['email'],
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
            'uf' => $data['estado'],
        ]);
    }
}
