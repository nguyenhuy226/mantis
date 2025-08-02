<?php

namespace App\Http\Middleware;

use App\Models\PersonalAccessToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $token = $request->bearerToken();
        if (!$token) {
            return response()->json(['message' => 'Unauthenticated112.'], 401);
        }

        $accessToken = PersonalAccessToken::where('token', hash('sha256', $token))->first();

        if (!$accessToken) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        if ($accessToken->expires_at && $accessToken->expires_at < now()) {
            return response()->json(['message' => 'Token expired'], 403);
        }

        $request->setUserResolver(function () use ($accessToken) {
            return $accessToken->tokenable;
        });
        return $next($request);
    }
}
