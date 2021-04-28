<?php

use App\Celling;
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
        DB::table('hospital_rooms')->delete();
        HospitalRoom::create(['name' => 'Quirófano','description' => 'No registrada','mesh' => true]);
        HospitalRoom::create(['name' => 'Urgencias','description' => 'No registrada','mesh' => true]);
        HospitalRoom::create(['name' => 'Hospitalización','description' => 'No registrada','mesh' => true]);

        DB::table('cellings')->delete();
        Celling::create(['name' => 'Pintura resistente','description' => 'No registrada','enviroment_id' => 1]);
        Celling::create(['name' => 'Pintura lavable','description' => 'No registrada','enviroment_id' => 1]);
        Celling::create(['name' => 'Pintura en esmalte','description' => 'No registrada','enviroment_id' => 1]);
        Celling::create(['name' => 'Papel tapiz','description' => 'No registrada','enviroment_id' => 1]);
        Celling::create(['name' => 'Recubrimiento de PVC','description' => 'No registrada','enviroment_id' => 1]);
        
        DB::table('walls')->delete();
        Wall::create(['name' => 'Pintura resistente','description' => 'No registrada','enviroment_id' => 1]);
        Wall::create(['name' => 'Pintura lavable','description' => 'No registrada','enviroment_id' => 1]);
        Wall::create(['name' => 'Pintura en esmalte','description' => 'No registrada','enviroment_id' => 1]);
        Wall::create(['name' => 'Papel tapiz','description' => 'No registrada','enviroment_id' => 1]);
        Wall::create(['name' => 'Recubrimiento de PVC','description' => 'No registrada','enviroment_id' => 1]);
        
        DB::table('floors')->delete();
        Wall::create(['name' => 'Piso liso','description' => 'No registrada','enviroment_id' => 1]);
        Wall::create(['name' => 'Rugoso','description' => 'No registrada','enviroment_id' => 1]);
        Wall::create(['name' => 'Madera','description' => 'No registrada','enviroment_id' => 1]);
        Wall::create(['name' => 'PVC','description' => 'No registrada','enviroment_id' => 1]);
        Wall::create(['name' => 'Baldosa','description' => 'No registrada','enviroment_id' => 1]);
        

    }
}
