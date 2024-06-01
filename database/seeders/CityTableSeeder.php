<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'Rio Branco', 'estado_id' => 1],
            ['name' => 'Maceió', 'estado_id' => 2],
            ['name' => 'Macapá', 'estado_id' => 3],
            ['name' => 'Manaus', 'estado_id' => 4],
            ['name' => 'Salvador', 'estado_id' => 5],
            ['name' => 'Fortaleza', 'estado_id' => 6],
            ['name' => 'Brasília', 'estado_id' => 7],
            ['name' => 'Vitória', 'estado_id' => 8],
            ['name' => 'Goiânia', 'estado_id' => 9],
            ['name' => 'São Luís', 'estado_id' => 10],
            ['name' => 'Cuiabá', 'estado_id' => 11],
            ['name' => 'Campo Grande', 'estado_id' => 12],
            ['name' => 'Belo Horizonte', 'estado_id' => 13],
            ['name' => 'Belém', 'estado_id' => 14],
            ['name' => 'João Pessoa', 'estado_id' => 15],
            ['name' => 'Curitiba', 'estado_id' => 16],
            ['name' => 'Recife', 'estado_id' => 17],
            ['name' => 'Teresina', 'estado_id' => 18],
            ['name' => 'Rio de Janeiro', 'estado_id' => 19],
            ['name' => 'Natal', 'estado_id' => 20],
            ['name' => 'Porto Alegre', 'estado_id' => 21],
            ['name' => 'Porto Velho', 'estado_id' => 22],
            ['name' => 'Boa Vista', 'estado_id' => 23],
            ['name' => 'Florianópolis', 'estado_id' => 24],
            ['name' => 'São Paulo', 'estado_id' => 25],
            ['name' => 'Aracaju', 'estado_id' => 26],
            ['name' => 'Palmas', 'estado_id' => 27],
            // Adicione mais cidades conforme necessário
        ]);
    }

}
