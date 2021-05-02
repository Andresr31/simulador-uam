<?php

use App\Celling;
use App\Floor;
use App\HospitalRoom;
use App\Wall;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cellings')->delete();
        Celling::create(['name' => 'Pintura resistente','description' => 'No registrada']);
        Celling::create(['name' => 'Pintura lavable','description' => 'No registrada']);
        Celling::create(['name' => 'Pintura en esmalte','description' => 'No registrada']);
        Celling::create(['name' => 'Papel tapiz','description' => 'No registrada']);
        Celling::create(['name' => 'Recubrimiento de PVC','description' => 'No registrada']);
        
        DB::table('walls')->delete();
        Wall::create(['name' => 'Pintura resistente','description' => 'No registrada']);
        Wall::create(['name' => 'Pintura lavable','description' => 'No registrada']);
        Wall::create(['name' => 'Pintura en esmalte','description' => 'No registrada']);
        Wall::create(['name' => 'Papel tapiz','description' => 'No registrada']);
        Wall::create(['name' => 'Recubrimiento de PVC','description' => 'No registrada']);
        
        DB::table('floors')->delete();
        Floor::create(['name' => 'Piso liso','description' => 'No registrada']);
        Floor::create(['name' => 'Rugoso','description' => 'No registrada']);
        Floor::create(['name' => 'Madera','description' => 'No registrada']);
        Floor::create(['name' => 'PVC','description' => 'No registrada']);
        Floor::create(['name' => 'Baldosa','description' => 'No registrada']);
        

        DB::table('hospital_rooms')->delete();
        HospitalRoom::create(['name' => 'Quirófano','description' => 'El quirófano es aquella sala que está especialmente acondicionada para la práctica de operaciones quirúrgicas a aquellos pacientes que así lo demanden. Asimismo, en el quirófano, se pueden desplegar otras actividades relacionadas, tales como el suministro de anestesia, una acción de reanimación, entre otras, para así, luego, poder realizar la mencionada intervención quirúrgica.', 'image'=>'img/elements/hospital_rooms/quirofano.jpg' ,'mesh' => true, 'floor_id'=>1,'celling_id'=>1,'wall_id'=>1]);
        HospitalRoom::create(['name' => 'Urgencias','description' => 'Es un departamento de atención primaria o sección de un hospital que ofrece un tratamiento inicial de pacientes con un amplio espectro de enfermedades y lesiones, algunas de las cuales pueden ser potencialmente mortales y requieren atención inmediata. ', 'image'=>'img/elements/hospital_rooms/urgencias.jpg' ,'mesh' => true, 'floor_id'=>1,'celling_id'=>1,'wall_id'=>1]);
        HospitalRoom::create(['name' => 'Hospitalización','description' => 'Son áreas diseñadas para prestar cuidados básicos y especializados, de manera integral y con altos estándares de calidad, generando una experiencia de eficiencia y seguridad en la atención, tanto al paciente como a su familia.', 'image'=>'img/elements/hospital_rooms/hospitalizacion.jpg' ,'mesh' => true, 'floor_id'=>1,'celling_id'=>1,'wall_id'=>1]);

        

    }
}
