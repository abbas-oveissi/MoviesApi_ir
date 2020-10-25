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
            $input['client_secret'] = "a1RqZIJnr8HbSV9A7nvqWib2PZWPt3bTFPc0xiFW";
            $request->merge($input);
            return $next($request);
        }
        return $next($request);
    }
}
