<?php

use App\BiomedicalEquipment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiomedicalEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biomedical_equipment')->delete();


        BiomedicalEquipment::create(['name' => 'Carro de paro', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 4, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cortina separadora', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'tablet', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cubeta de patada', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de mayo', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salidas de aire medicinal, oxígeno medicinal y sistema de vacío', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavado quirúrgico', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Silla de ruedas', 'description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => 6 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cabina de flujo laminar', 'description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Elementos para sujeción física para pacientes adultos y pediátricos', 'description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);


        BiomedicalEquipment::create(['name' => 'Bisturí-Instrumental', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Máscara laríngea', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Camilla de transporte', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 6, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Camilla de hospitalización', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 6, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Lámpara móvil', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 6, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Mesa para cirugía eléctrica, neumática o hidráulica', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 6, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Tubos endotraqueales de diferentes calibres', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Estilete de entubación con tubo endotraqueal', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Sistema de infusión rápida de líquidos', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de intubación retrógrada', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 5, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de cricotiroidomia percutanea', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de gases ateriales', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 5, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Instrumental gineco-obstétrico', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de atención de parto', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de toracostomía', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de pequeña cirugía', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de punción lumbar', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 5, 'category_id' => 2]);


        BiomedicalEquipment::create(['name' => 'Desfibrilador bifásico', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Monitor de signos vitales', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Equipo de rayos X portátil', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Bomba de infusión', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Máquina de anestesia', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Sistema de calentamiento de líquidos y sangre', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => 2, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Laringoscopio con hojas curvas y rectas', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 6, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Electrobisturí', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Electrocardiografo', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 2, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Estimulador de nervio periférico', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 2, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Glucómetro', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 2, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Tensiómetro', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 6, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Fonendoscopio', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 6, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Equipo de órganos de los sentidos', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 6, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Bomba de nutrición enteral', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Oxímetro', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Nebulizador', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 2, 'category_id' => 3]);


    
    }
}
