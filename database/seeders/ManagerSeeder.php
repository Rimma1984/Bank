<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manager::create([
            'service_id' => 5,
            'name'     => 'Сергей Смирнов',
                        
        ]);

        Manager::create([
            'service_id' => 3,
            'name'     => 'Айман Калелова',
                        
        ]);

        Manager::create([
            'service_id' => 1,
            'name'     => 'Дмитрий Нагиев',
                        
        ]);

        Manager::create([
            'service_id' => 4,
            'name'     => 'Мади Жапаров',
                        
        ]);

        Manager::create([
            'service_id' => 2,
            'name'     => 'Талгат Рахимов',
                        
        ]);
    }
}
