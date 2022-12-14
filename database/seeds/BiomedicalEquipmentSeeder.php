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

        //Quirofano
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
        BiomedicalEquipment::create(['name' => 'L??mpara rodante', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lampara quirurgica', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'L??mpara', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lanringoscopio con hojas rectas y curvas - carro de paro', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Laringoscopio con hojas rectas y curvas', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavamanos quir??rgico', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Maquina de anestesia', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'M??scaras laringeas', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de mayo', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de pasteur', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de ri??on', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
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
        
        // Urgencias
        BiomedicalEquipment::create(['name' => 'Analizador de gases electr??litos y metab??licos','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Analizador hematol??gico','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Autoanalizador bioqu??mico','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Banca met??lica para tres personas tipo t??ndem','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Centr??fuga para microhemat??crito','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 1 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Computadora personal','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cortina de lino plastificado incluye rie','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cubo met??lico para desperdicios, con tapa accionada a pedal','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Desfibrilador con monitor y paletas externa','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 4 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Dispensador de gel para limpieza de manos','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Dispensador de toallas de papel','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Escalinata met??lica de 1 pelda??o','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Escalinata met??lica de 2 pelda??os','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Espejo adosado marco met??lico de 40 x 60 cm','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Esterilizador cil??ndrico el??ctrico 35 L','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Extintor contra incendios, cap. 12 libras polvo qu??mico seco','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Flux??metro con humidificador para la red de ox??gen','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Gabinetes','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Impresora','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Inodoro de cer??mica vitrificada con v??lvula flux??met','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera cromada con dispensador para jab??n l??quido','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'L??mpara de reconocimiento con cuello de ganso','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 6 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'L??mpara quir??rgica rodable','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 6 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Laringoscopio adulto/pediatrico','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavadero de acero inoxidable con 2 pozas, agua fr??a y caliente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavadero de acero inoxidable una poza aprox. 20??? x 18???, agua fr??a','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavamanos de cer??mica vitrificada de 20??? x 18???, agua fr??a y calient','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavamanos de cer??mica vitrificada, grifer??a control de mano, agua fr??','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa div??n para reposo o inyectables','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa especial para t??pico','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa met??lica rodable para m??ltiples usos, acero inoxidable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa met??lica tipo mayo','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa rodable de acero inoxidable para curaciones','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Meseta  con cajones y abierto abajo, tablero de acero inoxidable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Meseta con cajones y puertas','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Meseta de estaci??n de enfermeras de dos niveles con porta teclado y abierto abajo','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Meseta para empotrar lavadero con puertas, tablero de acero inoxidable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mezclador','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Microscopio binocular','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 4 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera de pl??stico con tapa y ventana abatible','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera met??lica','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta lavatorio doble met??lico rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta rollo de papel higi??nico de loza','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta suero met??lico rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Refrigeradora para laboratorio de 14 pies c??bicos','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Resucitador manual','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de ox??geno','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de vac??o','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Secador el??ctrico autom??tico para manos','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Silla met??lica giratoria rodable con asiento alto','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Silla met??lica giratoria rodable, asiento alto','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Taburete met??lico asiento giratorio rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Taburete met??lico giratorio fij','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Tel??fono de mesa','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Tel??fono de pared','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Tensi??metro esfigmoman??metro fijo','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Tensi??metro rodable - adulto','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Toallero de gancho cromado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Unidad de aspiraci??n para ser conectada a la red de vac??o','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Vitrina de acero inoxidable para instrumental o material est??ril 68 x 45 cm','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);

        // Hospitalizaci??n
        BiomedicalEquipment::create(['name' => 'Barra cromada para cortinas','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Barra de acero para discapacitado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cama quir??rgica met??lica rodable de 2 manivelas para adultos de 2.02 x 0.92 x 0.60 m (cama hospitalaria)','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Dispensador de toallas de papel','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Escalinata met??lica de 1 pelda??o - banco escalera','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Espejo adosado marco met??lico de 40 x 60 cm','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Flux??metro con humidificado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Inodoro de cer??mica vitrificada con v??lvula flux??met','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera cromada con dispensador para jab??n l??quido','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera de loza para ducha','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavamanos de cer??mica vitrificada, agua fr??a y calient','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa met??lica de noche para hospitalizaci??n','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa rodable met??lica para comida paciente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Oval??n de cer??mica vitrificada, grifer??a control de mano, agua fr??a y calient','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Panel cabecera mural horizontal: con salidas para,  01 ox??geno, 01 vac??o, 01aire medicinal, 02 porta sueros, 04 tomacorrientes dobles estabilizados, 02 data, 01 riel, 01 iluminaci??n interna, 01 iluminaci??n externa, 01 llamada de enfermeras.','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera de pl??stico con tapa y ventana abatible','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera met??lica','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta rollo de papel higi??nico de loza','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta suero rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta suero rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Rack  de pared para TV de 32???','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de ducha de agua fr??a y caliente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Silla met??lica apilable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sill??n semiconfortable sin porta brazos unipersonal','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sumidero de bronce cromado para ducha','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Televisor a color de 32???','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Toallero de gancho cromado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Unidad de succi??n (frasco)','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Unidad de succi??n (frasco)','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Barra cromada para cortinas','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Barra de acero para discapacitado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cortina antibacteriana tipo Oxford','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Dispensador de toallas de papel','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Escalinata met??lica de 1 pelda??o- banco escalera','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Espejo adosado marco met??lico de 40 x 60 cm','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Flux??metro con humidificado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera cromada con dispensador para jab??n l??quido','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera de loza para ducha','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'MA-17 Mesa met??lica de noche para hospitalizaci??n','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa rodable met??lica para comida paciente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Panel cabecera mural horizontal con salidas para:  01 ox??geno, 01 vac??o,  01 aire medicinal, 02 porta sueros, 04 tomacorrientes dobles estabilizados,  02 data, 01 riel, 01 iluminaci??n interna, 01 iluminaci??n externa, 01 llamada de enfermeras.','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera de pl??stico con tapa y ventana abatible','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera met??lica','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta rollo de papel higi??nico de loza','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Rack  de pared para TV de 32???','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de ducha de agua fr??a y caliente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Silla met??lica apilable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sill??n semiconfortable sin porta brazos unipersonal','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sumidero de bronce cromado para ducha','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Televisor a color de 32???','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Toallero de gancho cromado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);



    
    }
}
