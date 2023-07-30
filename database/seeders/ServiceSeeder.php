<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name'     => 'Открытие депозита',
                        
        ]);

        Service::create([
            'name'     => 'Закрытие депозита',
                        
        ]);

        Service::create([
            'name'     => 'Оформление нового кредита',
                        
        ]);

        Service::create([
            'name'     => 'Погашение кредита',
                        
        ]);

        Service::create([
            'name'     => 'Консультация',
                        
        ]);
    }
}
