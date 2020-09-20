<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
   
    public function handle(Request $request, Closure $next)
    {
        $responce = $next($request);
        $content = $responce->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);
        $responce->setContent($content);
        return $responce;
    }
}
