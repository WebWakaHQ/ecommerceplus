<?php
namespace App\Http\Middleware;

use Closure;

class LogoutMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        return $response->withHeaders([
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);
    }
}
?>
