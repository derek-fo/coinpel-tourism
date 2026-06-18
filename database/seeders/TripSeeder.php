<?php

namespace Database\Seeders;

use App\Models\Trip;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trip::create([
            'status' => 'Em andamento',
            'name' => 'Carlos',
            'date' => '30/03/2021',
            'time' => '15:00',
            'route' => 'Pelotas > Rio Grande',
            'vehicle_id' => 1,
            'driver_id' => 1,
            'rule' => 'Faculdade',
        ]);
    }
}
