<?php

namespace Tests\Feature\Http\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use SebastianBergmann\Type\VoidType;
use Tests\TestCase;

class NewsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSuccessNewsList(): Void
    {
        $response = $this->get(route('admin.news.index'));
        $response->assertStatus(200);
    }

    public function testSuccessCreateForm(): void
    {
        $response = $this->get(route('admin.news.create'));
        $response->assertStatus(200);
    }

    public function testSuccessStoreResponse(): void
    {
        $postData = [
            'title' => fake()->jobTitle(),
            'author' => fake()->userName(),
            // 'status' => 'DRAFT',
            'description' => fake()->text(100),
        ];

        $response = $this->post(route('admin.news.store'), $postData);
        $response->assertStatus(200);
        $response->assertJson($postData);
    }

    public function testErrorStoreResponse(): void
    {
        $postData = [
            'author' => fake()->userName(),
            'status' => 'DRAFT',
            'description' => fake()->text(100),
        ];

        $response = $this->post(route('admin.news.store'), $postData);
        $response->assertStatus(302);
    }
}
