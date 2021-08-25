<?php
namespace App\Services;

class Square implements Shape
{
    public function FunctionName($request)
    {
        $method = $request->method;

        $$request->method = $request->length;

        return $$request->method;
    }
}
