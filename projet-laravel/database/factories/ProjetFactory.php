<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_responsable'=>$this->faker->lastName(),
            'prenom_responsable'=>$this->faker->firstName(),
            'tel_responsable'=>$this->faker->numerify('0#########'),
            'email_responsable'=>$this->faker->unique()->email,
            'title'=>$this->faker->text(10),
            'description'=>$this->faker->text(),
            'date_debut'=>$this->faker->date(),
            'date_fin'=>$this->faker->date(),
            'etat'=>$this->faker->text(),
            'nombre_jours_vendus'=>$this->faker->numerify()
        ];
    }
}
