<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EtatCivilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\EtatCivil::factory(8)->create();

    }
}
