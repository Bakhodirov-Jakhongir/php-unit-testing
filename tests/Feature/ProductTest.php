<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_contains_empty_products_table()
    {
        $response = $this->get('/');

        $response->assertSee('No products found.');

        // $response->assertDontSee('No products found.');

        $response->assertStatus(200);
    }

    // public function test_homepage_contains_non_empty_products_table()
    // {
    //     // $product = Product::create([
    //     //     'name' => 'Product 1',
    //     //     'price' => '99.99'
    //     // ]);

    //     $response = $this->get('/');

    //     $response->assertDontSeeText('No products found.');

    //     $response->assertStatus(200);

    //     // $response->assertSee('product 1');

    //     // $view_products = $response->viewData('products');
    //     // dd($view_products);

    //     // $this->assertEquals($product->anem, $view_products->first()->name());
    // }
}
