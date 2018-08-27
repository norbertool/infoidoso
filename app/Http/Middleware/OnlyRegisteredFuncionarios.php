<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use App\funcionarios;
use App\Requests\funcionariosRequest;
use Closure;

class OnlyRegisteredFunc
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $right=null)
    {
        $funcionarios = $request->funcionarios();
    
        if ($funcionarios && $funcionarios->onlyregisteredFuncionarios()) {
            return $next($request);
        }
    
        return redirect('auth/login');
    }
}
