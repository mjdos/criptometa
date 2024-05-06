<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'Admin',
            'perfil'        => 1,
            'carteira'       => '',
            'carteira_id'    => '',
            'projeto_id'    => '',
            'email'         => 'admin@admin.com',
            'password'      => bcrypt('1234'),
        ]);

        User::create([
            'name'          => 'João Silva',
            'perfil'        => 1,
            'carteira'      => '',
            'carteira_id'   => '',
            'projeto_id'    => '',
            'email'         => 'joao.silva@example.com',
            'password'      => bcrypt('senha123'),
        ]);

        User::create([
            'name'          => 'Maria Santos',
            'perfil'        => 2,
            'carteira'      => '',
            'carteira_id'   => '',
            'projeto_id'    => '',
            'email'         => 'maria.santos@example.com',
            'password'      => bcrypt('abcd9876'),
        ]);

        User::create([
            'name'          => 'Pedro Oliveira',
            'perfil'        => 3,
            'carteira'      => '',
            'carteira_id'   => '',
            'projeto_id'    => '',
            'email'         => 'pedro.oliveira@example.com',
            'password'      => bcrypt('xyz789'),
        ]);

        
        
    }
}
