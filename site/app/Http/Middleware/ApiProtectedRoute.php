<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use Auth;

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

        if(!Auth::guard('api')->check()) {
            return response()->json(['message' => 'Acesso não autorizado']);
            //return responder()->error('401', 'Acesso não autorizado')->respond(401, ['x-foo' => true]);

        } else {

            $token = str_replace('Bearer ', "" , $request->header('Authorization'));

            try { 
                JWTAuth::setToken($token);
    
                if (!$claim = JWTAuth::getPayload()) {
                    return response()->json(['message' => 'Usuário ou senha inválida'], 401);
                    //return responder()->error('401', 'Usuário ou senha inválida')->respond(401, ['x-foo' => true]);

                }
    
            } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
                return response()->json(['message' => 'Token Expirado'], 401);
                //return responder()->error('401', 'Token Expirado')->respond(401, ['x-foo' => true]);

            } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                return response()->json(['message' => 'Token Inválido'], 401);
                //return responder()->error('401', 'Token Inválido')->respond(401, ['x-foo' => true]);

            } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
                return response()->json(['message' => 'Token Ausente'], 401);
                //return responder()->error('401', 'Token Ausente')->respond(401, ['x-foo' => true]);

            } 

        }
        
        return $next($request);
    }
}
