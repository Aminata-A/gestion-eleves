<?php

namespace Database\Seeders;

use App\Models\UE;
use App\Models\Matiere;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatiereSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UE::factory()->count(5)->create(); 

        Matiere::factory()->count(20)->create();
    }
}
