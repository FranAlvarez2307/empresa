<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\cliente;
class clienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> $this -> faker -> name(),
            'puesto'=> $this -> faker -> randomElement(['cliente','auxiliar']),
            'correo'=> $this -> faker -> unique() -> safeEmail(),
            'contraseña'=> $this -> faker -> unique() -> numerify('#########')
        ];
    }
}
