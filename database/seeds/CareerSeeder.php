<?php

use Illuminate\Database\Seeder;
use App\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->delete();
        Career::create(["name" => "Ingenieria biomedica"]);
        Career::create(["name" => "Ingenieria de sistemas"]);
        Career::create(["name" => "Ingenieria electrónica"]);
    }
}
