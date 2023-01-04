<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\AuthenticationException;
use Illuminate\Database\Eloquent\HttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;
use Illuminate\Database\Eloquent\NotFoundHttpException;
use Illuminate\Database\Eloquent\ValidationException;
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
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        if ($request->expectsJson()) {
            if (
                $exception instanceof NotFoundHttpException
                or $exception instanceof HttpException
                or $exception instanceof ModelNotFoundException
                or $exception instanceof HttpResponseException
                or $exception instanceof AuthenticationException
                or $exception instanceof ValidationException
            ) {
                return failedApiResponse($exception->getMessage());
            }

            if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
                return failedApiResponse('Please check usr end point.');

            }
        }

        return parent::render($request, $exception);
    }
}
