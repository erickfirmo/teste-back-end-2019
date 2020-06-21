<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\AuthRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\User;
use Auth;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(AuthRequest $request)
    {
        $request->validated();

        $credentials = $request->only(['email', 'password']);
        $email = $request->input('erickluques@gmail.com');
        $password = $request->input('password');
        $user = User::where('email', $credentials['email'])
            ->where('password', $credentials['password'])
            ->first();

        // Check User
        if(!$user) {
            return response()->json(['message' => 'Usuário ou senha inválida'], 401);
            //return responder()->error('401', 'Usuário ou senha inválida')->respond(401, ['x-foo' => true]);
        }

        // Generate Token
        $token = JWTAuth::fromUser($user);

        // Get expiration time
        $objectToken = JWTAuth::setToken($token);
        $expiration = JWTAuth::decode($objectToken->getToken())->get('exp');

        return responder()->success([
            'access_token' => $token,
            'expires_in_seconds' => auth('api')->factory()->getTTL()
        ])->respond(200, ['success' => true]);        


    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $user = User::select('id', 'name','email')
            ->where('id', auth('api')->user()->id)
            ->get()
            ->first();

        return response()->json(['data' => $user], 200);

        // Using Laravel Responder
        // return responder()->success($user)->respond(200, ['success' => true]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Usuário deslogado com successo'], 200);

        // Using Laravel Responder
        // return responder()->success(['message' => 'Usuário deslogado com sucesso'])->respond(200, ['success' => true]);        
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        auth('api')->refresh();

        return response()->json(['message' => 'Acesso não autorizado'], 403);

        // Using Laravel Responder
        // return responder()->error('403', 'Acesso não autorizado')->respond(403, ['x-foo' => true]);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'expires_in_seconds' => auth('api')->factory()->getTTL()
        ], 200); 

        // Using Laravel Responder
        /*return responder()->success([
            'access_token' => $token,
            'expires_in_seconds' => auth('api')->factory()->getTTL()
        ])->respond(200, ['success' => true]);*/   
    }
}
