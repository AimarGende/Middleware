<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
class HacerLog
{
    public function handle($request, Closure $next)
    {
      
        Log::info("precargado de pagina");

        return $next($request);
    }

    public function terminate($request, $response)
    {

        Log::info("despues de cargar la pagina");
    }

}
