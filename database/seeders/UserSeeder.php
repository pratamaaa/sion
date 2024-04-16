<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Ricky Pratama',
            'email' => 'pratamaricky@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
