<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'admin',
            'email'    => 'ka_ri_ma@mail.ru',
            'password' => bcrypt('123456'),
            'is_admin' => false,
        ]);
    }
}
