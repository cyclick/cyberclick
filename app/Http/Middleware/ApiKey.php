<?php

namespace App\Http\Middleware;

use Closure;

use App\User;

class ApiKey
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
        $check = User::where('key', $request->header('api-key'))->first();

        if (!$check) {

            $response = [
                'CyberClik' => [
                    'query'     => [],
                    'status'    => [
                        'code'      => 400,
                        'deskripsi' => 'api key tidak valid'
                    ]
                ]
            ];          

            return response()->json($response, 400);
        }
        return $next($request);
    }
}
