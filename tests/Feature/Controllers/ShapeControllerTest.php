<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShapeControllerTest extends TestCase
{
    /**
     * test the shape index page is rendered properly.
     *
     * @return void
     */
    public function test_the_shape_index_page_is_rendered()
    {
        $response = $this->get('/shape');

        $response->assertStatus(200);
    }

    /**
     * test measure validation redirect.
     *
     * @return void
     */
    public function test_measure_validation_redirect_with_error()
    {
        $response = $this->get('/measure');

        $response->assertStatus(302);
    }

    /**
     * test measure validation redirect.
     *
     * @return void
     */
    public function test_measure_validation_passed()
    {
        $response = $this->get('/measure?shape=SquareService&length=10&width=10');

        $response->assertStatus(200);
    }
}
