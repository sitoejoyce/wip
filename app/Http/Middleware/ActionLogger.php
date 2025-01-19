<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ActionLog;

class ActionLogger
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (auth()->check()) {
            ActionLog::create([
                'user_id' => auth()->id(),
                'action' => $request->method() . ' ' . $request->path(),
                'details' => json_encode($request->all()), // Dados da requisição
                'ip' => $request->ip(),
            ]);
        }

        return $response;
    }
}
