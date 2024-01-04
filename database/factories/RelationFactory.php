<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\relation>
 */
class RelationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [   
            'UID' => 'RJU0000001',
            'IDSponsor' => 'Data',
            'IDUpperline' => 'Data',
            
        ];
    }
}
