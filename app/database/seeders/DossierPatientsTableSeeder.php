<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DossierPatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DossierPatient::factory(8)->create();
    }
}
