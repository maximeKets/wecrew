<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => fake()->firstName().' '.fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'discord' => fake()->url(),
            'about' => fake()->paragraph(),
            'twitter' => fake()->url(),
            'created_at' => fake()->dateTimeThisDecade(),
            'email_verified_at' => fake()->dateTimeThisDecade(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin' => fake()->boolean(10),
            'profil_picture' => fake()->filePath(),
            'category_id' => fake()->numberBetween(1, 6),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        /* return $this->state(fn (array $attributes) => [
             'email_verified_at' => null,
         ]);*/
    }
}
