<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\HealthTip;
use Illuminate\Database\Seeder;

class HealthTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        HealthTip::create(['tip' => 'Drink plenty of water to stay hydrated.']);
        HealthTip::create(['tip' => 'Get at least 7-8 hours of sleep every night.']);
        HealthTip::create(['tip' => 'Exercise regularly to maintain physical fitness.']);
        HealthTip::create(['tip' => 'Eat a balanced diet rich in fruits and vegetables.']);
        HealthTip::create(['tip' => 'Take breaks to manage stress and mental well-being.']);
    }
}
