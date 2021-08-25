<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShapeController extends Controller
{

    /**
     * ShapeService
     * @var ShapeService
     */
    private $ShapeService;

    function __construct(ShapeService $ShapeService) {
        $this->ShapeService = $ShapeService;
    }

}
