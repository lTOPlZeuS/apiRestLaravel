<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
USE Illuminate\Auth\AuthenticationException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function render($request,Throwable $exception){
        if ($exception instanceof ModelNotFoundException){
            return response()->json(["res"=>false,"message"=>"Error de modelo"],400);
        }
        if ($exception instanceof QueryException){
            return response()->json(["res"=>false,"message"=>"Error de consulta BDD",$exception->getMessage()],500);
        }
        if ($exception instanceof HttpException){
            return response()->json(["res"=>false,"message"=>"Error de ruta"],404);
        }
        if ($exception instanceof AuthenticationException){
            return response()->json(["res"=>false,"message"=>"Error de autenticacion"],401);
        }
        // if ($exception instanceof AuthorizationException){
        //     return response()->json(["res"=>false,"message"=>"Error de autorizacion, no tiene permisos"],403);
        // }
        return parent::render($request,$exception);
    }
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
