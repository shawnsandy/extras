<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 4/17/17
 * Time: 10:31 AM
 */

namespace ShawnSandy\Extras;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\Debug\Exception\FlattenException;

class SystemErrors extends ExceptionHandler
{

    public function renderErrors($request , $exception) {

        // 404 page when a model is not found
        if ($exception instanceof ModelNotFoundException or $exception instanceof NotFoundHttpException) {
            return response()->view('extras::errors.404', $request, 404);
        }

        if ($this->isHttpException($exception)) {

            $status = FlattenException::create($exception)->getStatusCode();

            if (view()->exists("extras::errors.{$status}")) {
                return response()->view("extras::errors.{$status}", $request, $status, $exception->getHeaders());
            } else {
                return $this->convertExceptionToResponse($exception);
            }
        } else {
            // Custom error view on production
            return response()->view('extras::errors.custom', $request, 500);
        }

    }

}
