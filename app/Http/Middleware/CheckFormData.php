<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckFormData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if all required form fields are present
        $requiredFields = ['gedung', 'lantai', 'nomor_kamar', 'photo_link1', 'photo_link2', 'photo_link3', 'kondisi', 'harga', 'spesifikasi'];
        $missingFields = array_diff($requiredFields, array_keys($request->all()));

            // if (!empty($missingFields)) {
            //     return redirect()->back()->withInput()->withErrors('Please fill in all required fields');
            // }

        return $next($request);
    }
}
