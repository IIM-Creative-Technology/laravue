<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words(5, true);
        return [
            'name'=>$name,
            'description'=>$this->faker->text(30),
            'raison_social'=>$this->faker->text(),
            'statut_juridique'=>$this->faker->text(),
            'capital'=>$this->faker->text(),
            'numero_siret'=>$this->faker->text(),
            'code_naf'=>$this->faker->text(),
            'pays'=>$this->faker->text(),
            'adresse'=>$this->faker->text(),
            'code_postal'=>$this->faker->numerify('#####'),
            'ville'=>$this->faker->text(),
        ];
    }
}
