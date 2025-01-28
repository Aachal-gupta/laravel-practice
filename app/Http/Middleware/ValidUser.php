<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        echo "<h3>this is valid User file .</h3>";
        echo "<h3> ". $role . "</h3>";

        if(Auth::check()){      // this fucntion will be check user login or not ? if it is login then it will be go to the usercontroller page  and from that it will be redirect to dashboard page
            return $next($request); // from that funation it will be return rquest as a respose to the dashboardpage fucntion
        }else{
            return redirect()->route('login');
        }


        if(Auth::check() && Auth::user()->role == $role){      // this fucntion will be check user login or not ? if it is login then it will be go to the usercontroller page  and from that it will be redirect to dashboard page
            return $next($request); // from that funation it will be return rquest as a respose to the dashboardpage fucntion
        }else{
            return redirect()->route('login');
        }



            // if( Auth::user()->role == $role){      // this fucntion will be check user login or not ? if it is login then it will be go to the usercontroller page  and from that it will be redirect to dashboard page
            //     return $next($request); // from that funation it will be return rquest as a respose to the dashboardpage fucntion
            // }else{
            //     return redirect()->route('login');
            // }
    }
}
