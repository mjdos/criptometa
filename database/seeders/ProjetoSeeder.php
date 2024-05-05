<?php

namespace Database\Seeders;

use App\Models\Projetos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();


        Projetos::create([
            'nome' => 'CriptoMoeda',
            'autor_id' => '1',
            'descricao' => 'O projeto visa a criação de CriptoMoedas',
            'valor' => 20000,
            'meta_1' => 'Acesso ao Beta',
            'meta_2'  => 'Consultoria sobre assunto',
            'meta_3' => 'Workshop',
            'meta_4' => 'Brindes personalizados',
            'meta_5' => 'Acesso a recursos premium',
            'imagem' =>  $faker->imageUrl(640, 480, 'cats'),
            'carteira' => '1.000',
        ]);

        Projetos::create([
            'nome' => 'Startup',
            'autor_id' => '1',
            'descricao' => 'Startup de bancaria',
            'valor' => 10000,
            'meta_1' => 'Cashback',
            'meta_2'  => 'Isenção de taxas',
            'meta_3' => 'Pontos de recompensas',
            'meta_4' => 'Juros reduzidos',
            'meta_5' => 'Suporte Premium',
            'imagem' =>  $faker->imageUrl(640, 480, 'cats'),
            'carteira' => '100.000',
        ]);

        Projetos::create([
            'nome' => 'Startup 1',
            'autor_id' => 1,
            'descricao' => 'Startup de banco digital',
            'valor' => 15000,
            'meta_1' => 'Cashback em compras',
            'meta_2' => 'Isenção de tarifas',
            'meta_3' => 'Programa de pontos',
            'meta_4' => 'Taxas de juros reduzidas',
            'meta_5' => 'Suporte premium ao cliente',
            'imagem' => $faker->imageUrl(640, 480, 'business'),
            'carteira' => '150000',
        ]);

        // Exemplo 2
        Projetos::create([
            'nome' => 'Startup 2',
            'autor_id' => 1,
            'descricao' => 'Plataforma de investimentos online',
            'valor' => 18000,
            'meta_1' => 'Diversificação de carteira',
            'meta_2' => 'Análise de mercado em tempo real',
            'meta_3' => 'Alta rentabilidade',
            'meta_4' => 'Acesso a investimentos alternativos',
            'meta_5' => 'Atendimento especializado',
            'imagem' => $faker->imageUrl(640, 480, 'city'),
            'carteira' => '200000',
        ]);

        // Exemplo 3
        Projetos::create([
            'nome' => 'Startup 3',
            'autor_id' => 1,
            'descricao' => 'Plataforma de empréstimos peer-to-peer',
            'valor' => 5000,
            'meta_1' => 'Facilidade de empréstimo',
            'meta_2' => 'Taxas competitivas',
            'meta_3' => 'Avaliação de crédito automatizada',
            'meta_4' => 'Processo rápido e transparente',
            'meta_5' => 'Segurança dos dados',
            'imagem' => $faker->imageUrl(640, 480, 'finance'),
            'carteira' => '120000',
        ]);

        // Exemplo 4
        Projetos::create([
            'nome' => 'Startup 4',
            'autor_id' => 1,
            'descricao' => 'Plataforma de gestão financeira pessoal',
            'valor' => 2000,
            'meta_1' => 'Orçamento e controle de gastos',
            'meta_2' => 'Investimentos automatizados',
            'meta_3' => 'Planejamento financeiro',
            'meta_4' => 'Alertas de vencimentos e pagamentos',
            'meta_5' => 'Segurança dos dados pessoais',
            'imagem' => $faker->imageUrl(640, 480, 'technics'),
            'carteira' => '80000',
        ]);

        // Exemplo 5
        Projetos::create([
            'nome' => 'Startup 5',
            'autor_id' => 1,
            'descricao' => 'Plataforma de educação financeira',
            'valor' => 25000,
            'meta_1' => 'Cursos online sobre finanças',
            'meta_2' => 'Ferramentas interativas de aprendizado',
            'meta_3' => 'Consultoria personalizada',
            'meta_4' => 'Dicas e conteúdos exclusivos',
            'meta_5' => 'Comunidade de usuários',
            'imagem' => $faker->imageUrl(640, 480, 'abstract'),
            'carteira' => '100000',
        ]);
    }
}
