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
        BiomedicalEquipmentCategory::create(['name' => 'Sillas','description' => 'No registrada']);
        BiomedicalEquipmentCategory::create(['name' => 'Camas','description' => 'No registrada']);
        BiomedicalEquipmentCategory::create(['name' => 'Mesas/Estantería','description' => 'No registrada']);
        BiomedicalEquipmentCategory::create(['name' => 'Equipos médicos','description' => 'No registrada']);
        BiomedicalEquipmentCategory::create(['name' => 'Iluminación','description' => 'No registrada']);
        
    }
}
