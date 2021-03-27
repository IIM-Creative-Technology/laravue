<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->unique()->words(2, true);
        return [
            'name_responsable'=>$this->faker->lastName(),
            'prenom_responsable'=>$this->faker->firstName(),
            'tel_responsable'=>$this->faker->phoneNumber,
            'email_responsable'=>$this->faker->unique()->safeEmail,
            'title'=>$title,
            'description'=>$this->faker->text(200),
            'date_debut'=>now(),
            'date_fin'=>$this->faker->date(),
            'etat'=>$this->faker->randomElement(['Terminé', 'En cours', 'Annulé']),
            'nombre_jours_vendus'=>$this->faker->numberBetween(1,90)
        ];

    }
}
