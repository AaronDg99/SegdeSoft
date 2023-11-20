<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\SumaController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Test if the sum of two numbers is correct.
     */
    public function test_sum_of_two_numbers(): void
    {   
        $sumaController = app(SumaController::class);
        $sum = app('app\Http\Controllers\SumaController')->add(3,3);
        $this->assertEquals(6, $sum);
    }
}
