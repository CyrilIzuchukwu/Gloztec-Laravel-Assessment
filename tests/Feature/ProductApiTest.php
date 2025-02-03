<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    use RefreshDatabase;

    public function test_authenticated_user_can_create_product()
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $response = $this->postJson('/api/products', [
            'name' => 'Laptop',
            'price' => 1500.50,
            'stock' => 10
        ]);

        $response->assertStatus(201)->assertJsonStructure([
            'id',
            'name',
            'price',
            'stock'
        ]);
    }

    public function test_unauthenticated_user_cannot_create_product()
    {
        $response = $this->postJson('/api/products', [
            'name' => 'Phone',
            'price' => 500.00,
            'stock' => 5
        ]);

        $response->assertStatus(401);
    }
}
