<?php

use App\BiomedicalEquipment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CareerSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BiomedicalEquipmentCategorySeeder::class);
        $this->call(HospitalRoomSeeder::class);
        $this->call(RiskFactorSeeder::class);
        $this->call(BiomedicalEquipmentSeeder::class);
        $this->call(RulesSeeder::class);
    }
}
