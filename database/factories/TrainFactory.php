<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
            'nome' => fake() -> unique() -> word(10),
            'luogo' => fake() -> sentence(1),
            'orario_di_partenza' => fake() -> dateTimeInInterval('-2 days', '+2 days'),
            'orario_di_arrivo' => fake() -> time(),
            'codice_treno' => fake() -> unique() -> randomNumber(),
            'numero_carrozze' => fake() -> randomDigitNot(0), 
            'disponibile' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()
        ];      
    }
}

