<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class SetLocale
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        app()->setLocale($lang = Crypt::decrypt($request->cookie('locale')) ? : 'sl');
        Carbon::setLocale($lang);

        $lc_time = [
            'sl' => 'sl_SI',
            'en' => '',
            'de' => 'de_DE'
        ];
        setlocale(LC_TIME, $lc_time[$lang]);

        return $next($request);
    }
}
