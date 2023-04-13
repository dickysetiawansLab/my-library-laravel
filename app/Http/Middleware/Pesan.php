<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Pesan as PesanModel;
use Illuminate\Support\Facades\Auth;

class Pesan
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
        $cheack = PesanModel::where('id', $request->get('id'))->first();
        if ($cheack->penerima == Auth::user()->username){
            return $next($request);
        }
        return redirect('/');
        // if (Pesan::where){
        //     return $next($request);
        // }
        // return redirect('/');
    }
}
