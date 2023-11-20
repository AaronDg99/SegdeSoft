<?php

namespace Tests\Unit;

use App\Http\Controllers\SumaController;
use PHPUnit\Framework\TestCase;

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

        // Aserción 1: Comprobar la suma de 3 + 3 es igual a 6
        $this->assertEquals(6, $sumaController->add(3, 3));

        // Aserción 2: Comprobar que la suma de 0 + 0 es igual a 0
        $this->assertEquals(0, $sumaController->add(0, 0));

        // Aserción 3: Comprobar la suma de números negativos, por ejemplo, -2 + (-3) es igual a -5
        $this->assertEquals(-5, $sumaController->add(-2, -3));

        // Aserción 4: Comprobar la suma de números positivos y negativos, por ejemplo, 5 + (-3) es igual a 2
        $this->assertEquals(2, $sumaController->add(5, -3));

        // Aserción 5: Comprobar la suma de números decimales, por ejemplo, 2.5 + 3.5 es igual a 6.0
        $this->assertEquals(6.0, $sumaController->add(2.5, 3.5));
    }
}
