<?php

use App\EquipmentRoomRequired;
use Illuminate\Database\Seeder;

class RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Quirofano
        for ($i=1; $i <= 50; $i++) {

            $r = rand(1,3);
            $required = 'TRUE';
            if ($r ==2) {
                $required = 'FALSE';
            }else if($r ==3){
                $required = 'OPTIONAL';
            }   
            
            EquipmentRoomRequired::create(['required' => $required, 'hospital_room_id' => 1, 'biomedical_equipment_id' => $i, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: '.$required]);

        }

        // Urgencias
        for ($i=51; $i <= 110; $i++) {

            $r = rand(1,3);
            $required = 'TRUE';
            if ($r ==2) {
                $required = 'FALSE';
            }else if($r ==3){
                $required = 'OPTIONAL';
            }   
            
            EquipmentRoomRequired::create(['required' => $required, 'hospital_room_id' => 2, 'biomedical_equipment_id' => $i, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: '.$required]);

        }

        // Hospitalizacion
        for ($i=111; $i <= 161; $i++) {

            $r = rand(1,3);
            $required = 'TRUE';
            if ($r ==2) {
                $required = 'FALSE';
            }else if($r ==3){
                $required = 'OPTIONAL';
            }   
            
            EquipmentRoomRequired::create(['required' => $required, 'hospital_room_id' => 3, 'biomedical_equipment_id' => $i, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: '.$required]);

        }
        
    }
}
