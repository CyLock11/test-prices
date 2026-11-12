<?php

namespace App\Http\Controllers;

class PriceController extends Controller
{
    public function toDollars(float $euros)
    {
        return round($euros * 1.11, 2);
    }

    public function discount(float $price, float $percent)
    {
        return $price - ($price * $percent / 100);
    }
}