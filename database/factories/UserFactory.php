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
    public function definition(): array
    {
        return [
            'fio' => fake()->name,
            'birthday' => fake()->date,
            'gender_id' => rand(1, 2),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
//$table->id();
//$table->string('fio', 150)->nullable(false);
//$table->date('birthday')->nullable();
//$table->foreignId('gender_id')->constrained('genders');
//$table->string("email", 50)->nullable(false)->unique();
//$table->string('password', 255)->nullable(false);
//$table->timestamps();
//$table->softDeletes();
