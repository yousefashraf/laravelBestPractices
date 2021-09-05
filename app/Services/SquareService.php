<?php
namespace App\Services;

use App\Services\ShapeService;

class SquareService implements ShapeService
{
    public function measure($num)
    {
        return $num + $num ;
    }
}
