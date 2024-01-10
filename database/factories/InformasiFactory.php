<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Informasi>
 */
class InformasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fileName = $this->faker->randomNumber() . ".jpg";
        $response = Http::get(imageUrl());
            Storage::put('public/' . $fileName, $response->body());
            $imageUrl = Storage::url($fileName);
            $fullPath = storage_path('app/public/' . $fileName); 
        
        return [
            'judul'=> $this->faker->word(),
            'banner_image'=> $imageUrl,
            'deskripsi_informasi'=> $this->faker->paragraphs(),
            'informasi'=> null,
            'category_id'=> null,
            
        ];
    }

}