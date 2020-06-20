<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
//use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class ApiProtectedRoute extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token= str_replace('Bearer ', "" , $request->header('Authorization'));

        try { 
            JWTAuth::setToken($token);

            if (!$claim = JWTAuth::getPayload()) {
                return response()->json(array('message' => 'Usuário ou senha inválida'), 401);
            }

        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(array('message' => 'Token Expirado'), 401);

        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(array('message' => 'Token Inválido'), 401);

        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(array('message' => 'Token Ausente'), 401);

        } 

        
        return $next($request);
    }
}
