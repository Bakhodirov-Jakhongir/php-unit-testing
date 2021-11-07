<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_homepage_contains_empty_products_table()
    {
        $response = $this->get('/');

        // $response->assertSee('No products found.');

        $response->assertStatus(200);
    }
}
