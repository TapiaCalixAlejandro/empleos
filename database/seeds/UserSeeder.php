<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alejandro',
            'email' => 'tapiacalix@gmail.com',
            'password' => Hash::make('12341234'),
            'email_verified_at' => Carbon::now(),
        ]);
        User::create([
            'name' => 'Irving Jared',
            'email' => 'irving@gmail.com',
            'password' => Hash::make('12341234'),
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
