<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PreventXSS
{
    public function handle(Request $request, Closure $next)
    {
        // Mengambil semua input dari request
        $input = $request->all();

        // Menyaring input untuk mencegah XSS
        array_walk_recursive($input, function (&$value) {
            if (is_string($value)) {
                // Menyaring input untuk karakter-karakter berbahaya
                $value = strip_tags($value); // Menghapus tag HTML
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); // Mengubah karakter khusus menjadi HTML entities
            }
        });

        // Memasukkan input yang sudah disaring kembali ke request
        $request->merge($input);

        return $next($request);
    }
}
