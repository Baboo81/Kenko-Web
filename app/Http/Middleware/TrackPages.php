<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PageVisit;
use Illuminate\Support\Str;

class TrackPages
{
    public function handle(Request $request, Closure $next)
    {
        // On continue la requête d'abord
        $response = $next($request);

        // On tracke uniquement si les cookies sont acceptés
        if (!$request->cookie('cookies_accepted')) {
            return $response;
        }

        // On évite de tracker certains appels inutiles
        if (
            $request->ajax() ||
            $request->is('assets/*') ||
            $request->is('storage/*')
        ) {
            return $response;
        }

        // Récupération + anonymisation IP (RGPD)
        $ip = $request->ip();

        if ($ip && Str::contains($ip, '.')) {
            // IPv4 → on masque le dernier bloc
            $ip = preg_replace('/\.\d+$/', '.0', $ip);
        }

        // Enregistrement en base
        PageVisit::create([
            'path'       => '/' . ltrim($request->path(), '/'),
            'method'     => $request->method(),
            'ip'         => $ip,
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        return $response;
    }
}
