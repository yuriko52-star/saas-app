<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $addresses = [
        [
            'postal_code' => '100-0001',
            'address' => '東京都千代田区千代田',
        ],
        [
            'postal_code' => '450-0002',
            'address' => '愛知県名古屋市中村区名駅',
        ],
        [
            'postal_code' => '491-0914',
            'address' => '愛知県一宮市花池',
        ],
    ];

        $location = fake()->randomElement($addresses);

        return [
           'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'postal_code' => $location['postal_code'],
            'address' => $location['address'], 
        ];
    }
}
