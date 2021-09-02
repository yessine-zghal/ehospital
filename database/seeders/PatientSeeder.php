<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;


class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Patient::factory()->count(25)->create();

    }
}
