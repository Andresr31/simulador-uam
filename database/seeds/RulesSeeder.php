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
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 1, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'FALSE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 2, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: FALSE']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 3, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 4, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 5, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 6, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'FALSE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 7, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: FALSE']);

        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 8, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 9, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 10, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 11, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 12, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 13, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 14, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 15, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 16, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 17, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 18, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 19, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);

        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 20, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 21, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 22, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 23, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 24, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 25, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 26, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'TRUE', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 27, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: TRUE']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 28, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        EquipmentRoomRequired::create(['required' => 'OPTIONAL', 'hospital_room_id' => 1, 'biomedical_equipment_id' => 29, 'feedback' => 'Respuesta incorrecta el requerimiento del equipo era: OPTIONAL']);
        

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
