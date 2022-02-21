<?php

use Illuminate\Database\Seeder;
use App\models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Front-end'
        ]);
        Category::create([
            'name' => 'Back-end'
        ]);
        Category::create([
            'name' => 'Full-stack'
        ]);
        Category::create([
            'name' => 'DevOps'
        ]);
        Category::create([
            'name' => 'DBO'
        ]);
        Category::create([
            'name' => 'UX/UI'
        ]);
    }
}
