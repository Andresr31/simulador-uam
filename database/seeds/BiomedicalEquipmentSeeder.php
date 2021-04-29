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
        BiomedicalEquipment::create(['name' => 'Analizador de gases anestesicos inspirados y expirados', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 2, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Aspirador o sistema de vacio - carro de paro', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Banco de altura', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Banco de reposo', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Bomba de infusion', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Camilla con barandas, ruedas y freno', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Carro de paro', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cortina para privacidad', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cubeta de patada', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Desfibrilador', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Desfibrilador bifasico - carro de paro', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Electrobisturi', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Electrocardiografo', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 5, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Equipo de cricotiroidomia percutanea', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Equipo de gases ateriales', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 5, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Equipo de rayos x portatil ', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 5, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Estilete de entubacion con tubo endotraqueal', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Instrumental', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lámpara rodante', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lampara quirurgica', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lámpara', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lanringoscopio con hojas rectas y curvas - carro de paro', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Laringoscopio con hojas rectas y curvas', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavamanos quirúrgico', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Maquina de anestesia', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Máscaras laringeas', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de mayo', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de pasteur', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de riñon', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa para cirugia electrica, neumatica o hidraulica', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa para instrumental quirurgico', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Monitor de signos vitales - carro de paro', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Monitor de signos vitales', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Negatroscopio', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Oxigeno medicinal portatil', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Puerta', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Rejilla de extraccion', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Reloj', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Resucitador pulmonar manual - carro de paro', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de aire medicinal', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de oxigeno medicinal', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sistema de calientemiento de liquidos y sangre', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sistema de extraccion de gases anestesicos', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sistema de infusion rapida de liquidos', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sistema de vacio', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Tomacorriente', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Triple o triplete', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Tubos endotraqueales de diferentes calibres', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Ventana', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Ventilador', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 1]);
    }
}
