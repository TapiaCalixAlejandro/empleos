<?php

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'name' => '0 - 6 meses'
        ]);
        Experience::create([
            'name' => '6 meses - 1 año'
        ]);
        Experience::create([
            'name' => '1 - 3 años'
        ]);
        Experience::create([
            'name' => '3 - 5 años'
        ]);
        Experience::create([
            'name' => '5 - 7 años'
        ]);
        Experience::create([
            'name' => '7 - 10 años'
        ]);
    }
}
