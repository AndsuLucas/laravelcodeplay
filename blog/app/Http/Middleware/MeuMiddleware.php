<?php

namespace App\Http\Middleware;

use Closure;

class MeuMiddleware
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
        $post_body_length = \strlen( \trim($request->body) );
        
        if ( $post_body_length < 50 ) {
           
            return redirect('/');
        }

        return $next($request);
    }
}
