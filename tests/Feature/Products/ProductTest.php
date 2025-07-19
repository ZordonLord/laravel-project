<?php

namespace Tests\Feature\Products;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test that products can be indexed.
     */
    public function test_products_can_be_indexed(): void
    {
        Product::factory(3)->create();

        $response = $this->getJson('/api/products');

        $response->assertStatus(200)
                 ->assertJsonCount(3)
                 ->assertJsonStructure([
                     '*' => ['id', 'sku', 'name', 'price', 'created_at', 'updated_at']
                 ]);
    }

    /**
     * Test that a product can be shown.
     */
    public function test_product_can_be_shown(): void
    {
        $product = Product::factory()->create();

        $response = $this->getJson("/api/products/{$product->id}");

        $response->assertStatus(200)
                 ->assertJson($product->toArray());
    }

    /**
     * Test that a product can be stored.
     */
    public function test_product_can_be_stored(): void
    {
        $productData = [
            'sku' => 'AB123456',
            'name' => 'Test Product',
            'price' => 99.99,
        ];

        $response = $this->postJson('/api/products', $productData);

        $response->assertStatus(201)
                 ->assertJson($productData);

        $this->assertDatabaseHas('products', $productData);
    }

    /**
     * Test that a product can be updated.
     */
    public function test_product_can_be_updated(): void
    {
        $product = Product::factory()->create();
        $updateData = [
            'name' => 'Updated Product Name',
            'price' => 149.99,
        ];

        $response = $this->putJson("/api/products/{$product->id}", $updateData);

        $response->assertStatus(200)
                 ->assertJson($updateData);

        $this->assertDatabaseHas('products', array_merge(['id' => $product->id], $updateData));
    }

    /**
     * Test that a product can be destroyed.
     */
    public function test_product_can_be_destroyed(): void
    {
        $product = Product::factory()->create();

        $response = $this->deleteJson("/api/products/{$product->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
