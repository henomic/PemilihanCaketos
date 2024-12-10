<?php

namespace App\Http\Middleware;

use App\Models\periode;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class periodeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $periode = periode::where('tahun', '<', Carbon::now()->format('Y'))->whereNot('status', 'selesai')
            ->get();
        // dd($periode);
        foreach ($periode as $key) {
            $key->status = 'selesai';
            $key->save();
        }


        return $next($request);
    }
}
