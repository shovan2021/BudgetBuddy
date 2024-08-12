<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTimestamp = strtotime('2024-08-11');
        $endTimestamp = time();
        $randomTimestamp = rand($startTimestamp, $endTimestamp);

        return [
            'full_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'phone' => $this->faker->numberBetween(7000000000,9999999999),
            'address' => $this->faker->sentence(),
            'about' => $this->faker->text(1000),
            'profile_picture' => null,
            'added_time' => $randomTimestamp,
            'last_updated_time' => null,
            'status' => '1'
        ];
    }
}
