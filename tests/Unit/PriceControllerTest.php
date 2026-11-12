<?php

namespace Tests\Unit;

use App\Http\Controllers\PriceController;
use PHPUnit\Framework\TestCase;

class PriceControllerTest extends TestCase
{
    public function test_converts_euros_to_dollars()
    {
        $controller = new PriceController();

        $result = $controller->toDollars(10);

        $this->assertEquals(11.1, $result);
    }

    public function test_applies_discount()
    {
        $controller = new PriceController();

        $result = $controller->discount(100, 20);

        $this->assertEquals(80, $result);
    }

    public function test_zero_discount_keeps_price()
    {
        $controller = new PriceController();

        $result = $controller->discount(50, 0);

        $this->assertEquals(50, $result);
    }
}