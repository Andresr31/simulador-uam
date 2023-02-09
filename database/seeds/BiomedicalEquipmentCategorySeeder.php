<?php

use App\BiomedicalEquipmentCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiomedicalEquipmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biomedical_equipment_categories')->delete();
        BiomedicalEquipmentCategory::create(['name' => 'Mobiliario hospitalario','description' => 'No registrada']);
        BiomedicalEquipmentCategory::create(['name' => 'Dispositivos médicos','description' => 'No registrada']);
        BiomedicalEquipmentCategory::create(['name' => 'Equipos biomédicos','description' => 'No registrada']);
    }
}
