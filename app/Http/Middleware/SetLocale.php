<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Encryption\DecryptException;
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
        try {
            app()->setLocale($lang = Crypt::decrypt($request->cookie('locale')) ? : 'sl');
            Carbon::setLocale($lang);

            $lc_time = [
                'sl' => 'sl_SI',
                'en' => '',
                'de' => 'de_DE'
            ];
            setlocale(LC_TIME, $lc_time[$lang]);
        } catch ( DecryptException $ex ) {
            
        }

        return $next($request);
    }
}
