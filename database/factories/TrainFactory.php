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
            'orario_di_partenza' => fake() -> dateTimeInInterval('-0 days', '+ 0 days'),
            'orario_di_arrivo' => fake() -> dateTimeInInterval('-0 days' , '+1 days'),
            'codice_treno' => fake() -> unique() -> ean8(),
            'numero_carrozze' => fake() -> randomDigitNot(0), 
            'disponibile' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()
        ];      
    }
}

