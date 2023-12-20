<?php

namespace Database\Factories;

use App\Models\ProjectAssignment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectAssignment>
 */
class ProjectAssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProjectAssignment::class;

    public function definition()
    {
        return [
            // Add ProjectAssignment attributes as needed
        ];
    }
}
