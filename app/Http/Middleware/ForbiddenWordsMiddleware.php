<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenWordsMiddleware
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
        $fwords = ['hate', 'idiot', 'stupid'];

        foreach($fwords as $word) {
            if(strpos($request->content, $word) !== false){
                return back()->with('message', 'You have used one or more forbidden words!');
            }
        }


        return $next($request);
    }
}
