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
            'name' => 'Admin',
            'perfil' => 1,
            'email' => 'admin@admin.com',
            'password'  => bcrypt('1234'),
        ]);
        
    }
}
