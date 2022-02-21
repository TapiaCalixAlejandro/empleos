<?php

use Illuminate\Database\Seeder;
use App\Models\Salary;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salary::create([
            'name' => '0 - 1000 USD'
        ]);
        Salary::create([
            'name' => '1000 - 2000 USD'
        ]);
        Salary::create([
            'name' => '2000 - 4000 USD'
        ]);
        Salary::create([
            'name' => 'No mostrar'
        ]);
    }
}
