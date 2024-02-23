<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresa;
use Faker\Factory as Faker;

class EmpresaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');
        
        for ($i = 0; $i < 100; $i++) {
            Empresa::create([
                'nome_cliente' => $faker->name,
                'cep' => $faker->postcode,
                'rua' => $faker->streetName,
                'bairro' => $faker->word,
                'cidade' => $faker->city,
                'estado' => $faker->stateAbbr,
            ]);
        }
    }
}
