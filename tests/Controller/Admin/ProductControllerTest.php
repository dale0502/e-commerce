<?php

namespace Tests\Controller\Admin;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function PHPUnit\Framework\assertJsonStringEqualsJsonFile;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    
    public function testProductIndex(): void
    {
        $response = $this->json('GET', route('admin::index'));
        $response->assertSuccessful();
    }

    // 測試產品新增
    public function testProductStore(): void
    {

        $products = Product::factory()->create();
        $data = [
            'title' => $products->title,
            'content' => $products->content,
            'price' => $products->price,
            'quantity' => $products->quantity
        ];

        $this->postJson( route('admin::store', $data))
        ->assertStatus(302)
        ->assertSessionHasNoErrors();
    }

    public function testImageUpload()
    {
        // \Storage::fake('avatars');
        // $response = $this->json('POST', '/avatar', [
        //     'avatar' => UploadedFile::fake()->image('avatar.jpg')
        // ]);
        // // Assert the file was stored...
        // \Storage::disk('avatars')->assertExists('avatar.jpg');
        // // Assert a file does not exist...
        // \Storage::disk('avatars')->assertMissing('missing.jpg');
    }
}
