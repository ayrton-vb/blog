<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $image = Http::get('https://picsum.photos/400/300'); // Obtiene una imagen aleatoria
        $filename = 'posts/' . uniqid() . '.jpg'; // Nombre único
        Storage::put('public/' . $filename, $image->body()); // Guarda en storage/app/public/posts
      
        
        return [
            'url' => $filename
        ];
    }
}
