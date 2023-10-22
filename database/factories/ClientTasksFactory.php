<?php

namespace Database\Factories;

use App\Models\ClientTasks;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientTasksFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\ClientTasks::class;
   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    { 
        $sample_products = ['Product X', 'Product Y', 'Product Z'];
        $sample_components = ['Component A', 'Component B', 'Component C', 'Component D'];
        $sample_status = ['done', 'in progress', 'blocked', 'pending', 'new'];
        return [
            'name' => fake()->randomElement($sample_products),
            'client_ID' => 4,   // Temporary 
            'component' => fake()->randomElement($sample_components),
            'status' => fake()->randomElement($sample_status),
            'notes' => fake()->sentences(3, true),
        ];
    }
}
