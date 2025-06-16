<?php

use App\Http\Middleware\IsRevisor;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))

->withRouting(
    web: __DIR__ . '/../routes/web.php',
    commands: __DIR__ . '/../routes/console.php',
    health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Middleware per bloccare le richieste da chi non è revisore
        $middleware->alias([
            'isRevisor' => IsRevisor::class
        ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //

    })->create();
