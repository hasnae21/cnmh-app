<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RendezVousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\RendezVous::factory(8)->create();
    }
}
