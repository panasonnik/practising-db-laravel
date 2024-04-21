<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Status;

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
        $statuses = Status::pluck('id')->toArray(); //взяти id статусів
        return [
            'status_id' => $this->faker->randomElement($statuses),
            'name'=>$this->faker->name,
            'company'=>$this->faker->company,
        ];
    }
}
