<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        // $middleware->append(AgeCheck::class);    
        // globally

        
        // $middleware->appendToGroup('check',[
        //     AgeCheck::class,
            // CountryCheck::class
            // http://127.0.0.1:8000/about?age=20/hello&country=india
    // ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
