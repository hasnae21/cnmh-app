<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NiveauScolairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\NiveauScolaire::factory(50)->create();
        

    }
}
