<?php
namespace App\Services;

class SquareService implements ShapeService
{
    public function FunctionName($request)
    {
        $method = $request->method;

        $$request->method = $request->length;

        return $$request->method;
    }
}
