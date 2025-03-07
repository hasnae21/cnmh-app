<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\NiveauScolaire;
use App\Models\Tuteur;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tuteur_id' =>  $this->faker->randomElement(Tuteur::pluck("id")),
            'niveau_scolaire_id' =>$this->faker->randomElement(NiveauScolaire::pluck("id")),
            'nom' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'prenom' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'telephone' => $this->faker->numerify('0##########'),
            'cin' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'email' => $this->faker->email,
            'image' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'adresse' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'remarques' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
