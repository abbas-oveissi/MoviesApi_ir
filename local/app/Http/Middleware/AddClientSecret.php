<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class AddClientSecret
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
        $url=str_replace(URL::to('/'),"",$request->url());
        if($url=="/oauth/token")
        {
            $input = $request->all();
            $input['client_id'] = 2;
            $input['client_secret'] = "CUSLieIPlfuqb3BEBZcMoQUg5EnobZ2Dy3wSVPQR";
            $request->merge($input);
            return $next($request);
        }
        return $next($request);
    }
}
