<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShapeService;
use App\Http\Requests\ShapeMeasureRequest;

class ShapeController extends Controller
{

    public function index()
    {
        return view('shape.shape');
    }

    public function measure(ShapeMeasureRequest $request)
    {
        // build path to service
        $shape = 'App\\Services\\'. $request->shape;

        // check if service is a shape
        if(is_a($shape, ShapeService::class, true)) {
            $shapeClass = new $shape;
            return $shapeClass->measure($request->length);
        }

        // return errors with inputs
        return redirect()->back()->withErrors()->withInput($request->input());
    }

}
