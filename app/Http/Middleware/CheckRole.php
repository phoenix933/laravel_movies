<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, $role = null)
     {
 		$redirect = false;
 		if ($request->user()) {
             $id = $request->user()->id;
 			$mobile = $request->user()->mobile;
             if($role == 'admin')
             {
                 if($id > 1)
                     $redirect = true;
             }
             if($redirect)
                 return redirect('/');
         }
         return $next($request);
     }
}
