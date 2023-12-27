<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newUser = new User();
        $newUser->name = 'Usuario Dev Torres';
        $newUser->email = 'diegostorres10@gmail.com';
        $newUser->password = bcrypt('12345678'); // password: 12345678
        $newUser->save();
    }
}
