<?php

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name' => 'Remoto'
        ]);
        Location::create([
            'name' => 'Estados unidos'
        ]);
        Location::create([
            'name' => 'México'
        ]);
        Location::create([
            'name' => 'Canadá'
        ]);
        Location::create([
            'name' => 'Holanda'
        ]);
        Location::create([
            'name' => 'Expaña'
        ]);
        Location::create([
            'name' => 'Colombia'
        ]);
        Location::create([
            'name' => 'Nueva zelanda'
        ]);
    }
}
