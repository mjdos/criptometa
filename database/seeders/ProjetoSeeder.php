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
            'autor_id' => 2,
            'descricao' => 'O projeto visa a criação de CriptoMoedas',
            'valor' => 20000,
            'meta_1' => 'Acesso ao Beta',
            'meta_2'  => 'Consultoria sobre assunto',
            'meta_3' => 'Workshop',
            'meta_4' => 'Brindes personalizados',
            'meta_5' => 'Acesso a recursos premium',
            'imagem' =>  'storage/imagemProjetos/img1.png',
            'carteira' => '1.000',
        ]);

        Projetos::create([
            'nome' => 'EvoBank',
            'autor_id' => 2,
            'descricao' => 'Startup de bancaria',
            'valor' => 10000,
            'meta_1' => 'Cashback',
            'meta_2'  => 'Isenção de taxas',
            'meta_3' => 'Pontos de recompensas',
            'meta_4' => 'Juros reduzidos',
            'meta_5' => 'Suporte Premium',
            'imagem' =>  'storage/imagemProjetos/img2.jpg',
            'carteira' => '100.000',
        ]);

        Projetos::create([
            'nome' => 'PrimeWave Bank',
            'autor_id' => 3,
            'descricao' => 'Startup de banco digital',
            'valor' => 15000,
            'meta_1' => 'Cashback em compras',
            'meta_2' => 'Isenção de tarifas',
            'meta_3' => 'Programa de pontos',
            'meta_4' => 'Taxas de juros reduzidas',
            'meta_5' => 'Suporte premium ao cliente',
            'imagem' =>  'storage/imagemProjetos/img4.jpg',
            'carteira' => '150000',
        ]);

        // Exemplo 2
        Projetos::create([
            'nome' => 'Investech',
            'autor_id' => 4,
            'descricao' => 'Plataforma de investimentos online com foco em inovação tecnológica',
            'valor' => 18000,
            'meta_1' => 'Desenvolvimento de algoritmos de diversificação de carteira',
            'meta_2' => 'Implementação de análise de mercado em tempo real',
            'meta_3' => 'Alcançar alta rentabilidade para os investidores',
            'meta_4' => 'Oferecer acesso a investimentos alternativos de forma simplificada',
            'meta_5' => 'Proporcionar atendimento especializado e personalizado aos clientes',
            'imagem' =>  'storage/imagemProjetos/img7.png',
            'carteira' => '200000',
        ]);

        Projetos::create([
            'nome' => 'FoodFusion',
            'autor_id' => 2,
            'descricao' => 'Plataforma de entrega de comida fusion',
            'valor' => 10000,
            'meta_1' => 'Variedade de pratos fusion',
            'meta_2' => 'Qualidade dos ingredientes',
            'meta_3' => 'Entrega rápida e eficiente',
            'meta_4' => 'Interface amigável para pedidos',
            'meta_5' => 'Atendimento ao cliente excepcional',
            'imagem' =>  'storage/imagemProjetos/img3.png',
            'carteira' => '80000',
        ]);
        

        Projetos::create([
            'nome' => 'HairHub',
            'autor_id' => 3,
            'descricao' => 'Plataforma de cuidados e gestão de cabelos',
            'valor' => 15000,
            'meta_1' => 'Dicas personalizadas de cuidados capilares',
            'meta_2' => 'Produtos recomendados para cada tipo de cabelo',
            'meta_3' => 'Avaliação virtual de problemas capilares',
            'meta_4' => 'Agendamento online em salões de beleza parceiros',
            'meta_5' => 'Comunidade engajada de entusiastas de cabelo',
            'imagem' =>  'storage/imagemProjetos/img5.png',
            'carteira' => '60000',
        ]);
        

        Projetos::create([
            'nome' => 'GameWorld',
            'autor_id' => 4,
            'descricao' => 'Plataforma de jogos online e interativos',
            'valor' => 35000,
            'meta_1' => 'Catálogo diversificado de jogos para todas as idades',
            'meta_2' => 'Experiência imersiva e interativa',
            'meta_3' => 'Competições e torneios emocionantes',
            'meta_4' => 'Comunidade de jogadores engajada',
            'meta_5' => 'Suporte técnico eficiente e ágil',
            'imagem' =>  'storage/imagemProjetos/img6.png',
            'carteira' => '120000',
        ]);
        
    }
}
