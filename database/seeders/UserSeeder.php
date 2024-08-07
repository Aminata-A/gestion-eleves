<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Supprimer les utilisateurs existants
        DB::table('users')->truncate();

        // Créer des utilisateurs fictifs
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Emily Johnson',
                'email' => 'emily.johnson@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael.brown@example.com',
                'password' => Hash::make('password123'),
            ],
        ];

        // Insérer les utilisateurs dans la base de données
        DB::table('users')->insert($users);
    }
}
