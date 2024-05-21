<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectCategory;

class ProjectCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Coded templates', 'description' => 'Templates codificados prontos para uso.'],
            ['name' => 'Social graphics', 'description' => 'Gráficos para redes sociais.'],
            ['name' => 'UI templates', 'description' => 'Templates de interface de usuário.'],
        ];
    }
}
