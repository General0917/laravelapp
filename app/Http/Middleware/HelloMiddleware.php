<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response {
    //     $data = [
    //         [ 'model_num' => 102, 'nick' => 'DUEL', 'pilot' => 'Yzak Jule' ],
    //         [ 'model_num' => 103, 'nick' => 'BUSTER', 'pilot' => 'Dearka Elthman' ],
    //         [ 'model_num' => 105, 'nick' => 'STRIKE', 'pilot' => 'Kira Yamato' ],
    //         [ 'model_num' => 207, 'nick' => 'BLITZ', 'pilot' => 'Nicol Amarfi'],
    //         [ 'model_num' => 303, 'nick' => 'AEGIS', 'pilot' => 'Athrun Zala' ]
    //     ];

    //     $request->merge(['data' => $data]);

    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next) {
        $response = $next($request);
        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        $response->setContent($content);

        return $response;
    }
}
