<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShapeController extends Controller
{

    // /**
    //  * SquareService
    //  * @var SquareService
    //  */
    // private $ShapeService;

    // function __construct(ShapeService $ShapeService) {
    //     $this->ShapeService = $ShapeService;
    // }

    public function index()
    {
        return view('shape.shape', $data);
    }

    public function measure(Request $request)
    {
        // dd($request->shape);
        $shape = 'App\\Services\\'. $request->shape;
        $shapeClass = new $shape;
        return $shapeClass->measure($request->num);
    }

}
