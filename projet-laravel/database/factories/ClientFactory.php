<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
        // $name = $this->faker->unique()->words(2, true);
        return [
            // 'name'=>$name,
            // 'slug'=> Str::slug($name),
            'description'=>$this->faker->text(30),
            'raison_social'=>$this->faker->unique()->company,
            'statut_juridique'=>$this->faker->randomElement(['EI', 'EIRL', 'EURL','SARL', 'SA', 'SAS','SASU', 'SNC', 'SCOP','SCA', 'SCS']),
            'capital'=>$this->faker->numberBetween(3000,100000),
            'numero_siret'=>$this->faker->unique('##############')->numerify,
            'code_naf'=>$this->faker->unique('#####')->numerify,
            'pays'=>$this->faker->unique()->country,
            'adresse'=>$this->faker->unique()->address,
            'code_postal'=>$this->faker->unique('#####')->numerify,
            'ville'=>$this->faker->unique()->city,
        ];
    }
}
