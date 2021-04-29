<?php

use App\RiskFactor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiskFactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('risk_factors')->delete();
        RiskFactor::create(['name' => 'IA', 'description' => 'IA']);
        RiskFactor::create(['name' => 'IIA', 'description' => 'IIA']);
        RiskFactor::create(['name' => 'AIIB', 'description' => 'AIIB']);
        RiskFactor::create(['name' => 'IIB', 'description' => 'IIB']);
        RiskFactor::create(['name' => 'III', 'description' => 'III']);
    }
}
