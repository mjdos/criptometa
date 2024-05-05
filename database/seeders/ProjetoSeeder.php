<?php

namespace Database\Seeders;

use App\Models\Projetos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projetos::create([
            'nome' => 'CriptoMoeda',
            'descricao' => 'O projeto visa a criação de CriptoMoedas',
            'meta_1' => 'Acesso ao Beta',
            'meta_2'  => 'Consultoria sobre assunto',
            'meta_3' => 'Workshop',
            'meta_4' => 'Brindes personalizados',
            'meta_5' => 'Acesso a recursos premium',
            'imagem' => 'xxx',
            'carteira' => '1.000',
        ]);

        Projetos::create([
            'nome' => 'Startup',
            'descricao' => 'Startup de bancaria',
            'meta_1' => 'Cashback',
            'meta_2'  => 'Isenção de taxas',
            'meta_3' => 'Pontos de recompensas',
            'meta_4' => 'Juros reduzidos',
            'meta_5' => 'Suporte Premium',
            'imagem' => 'xxx',
            'carteira' => '100.000',
        ]);
    }
}



        
        
        
        