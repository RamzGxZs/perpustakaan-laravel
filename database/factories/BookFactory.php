<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		$title = rtrim(fake()->sentence(3), '.');
		return [
			'title' => $title,
			'author' => fake()->name(),
			'descriptions' => fake()->paragraph(4),
			'pages' => fake()->numberBetween(100, 500),
			'book_image' => 'https://placehold.co/300x400/2563eb/ffffff?text=' . urlencode($title),
			'book_readed' => fake()->numberBetween(100, 1000000)
		];
	}
}
