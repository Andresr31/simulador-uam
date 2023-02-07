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
        BiomedicalEquipment::create(['name' => 'Carro de paro', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cortina separadora', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'tablet', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cubeta de patada', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de mayo', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de aire', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de oxigeno', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de vacío','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavado quirúrgico', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => null, 'category_id' => 1]);

        BiomedicalEquipment::create(['name' => 'Bisturí-Instrumental', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 2, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Máscara laríngea', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Camilla de transporte', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Camilla de hospitalización', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Lámpara móvil', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Mesa para cirugía eléctrica, neumática o hidráulica', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Tubo endotraqueal', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Estilete de entubación con tubo endotraqueal', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Sistema de infusión', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de intubación retrógrada', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 5, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de cricotiroidomia percutanea', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 2]);
        BiomedicalEquipment::create(['name' => 'Equipo de gases ateriales', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 5, 'category_id' => 2]);

        BiomedicalEquipment::create(['name' => 'Desfibrilador', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Monitor de signos vitales', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Rayos X', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 5, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Bomba de infusión', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Máquina de anestesia', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Sistema de calentamiento de fluidos', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Laringoscopio', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Electrobisturí', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Electrocardiografo', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 5, 'category_id' => 3]);
        BiomedicalEquipment::create(['name' => 'Estimulador de nervio periférico ', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => null, 'category_id' => 3]);





        BiomedicalEquipment::create(['name' => 'Analizador de gases anestesicos inspirados y expirados', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 2, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Banco de altura', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Banco de reposo', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Instrumental', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lámpara rodante', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lampara quirurgica', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lámpara', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavamanos quirúrgico', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de pasteur', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa de riñon', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa para instrumental quirurgico', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Negatroscopio', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 1, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Oxigeno medicinal portatil', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Puerta', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Rejilla de extraccion', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Reloj', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Resucitador pulmonar manual - carro de paro', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sistema de extraccion de gases anestesicos', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 3, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sistema de vacio', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Tomacorriente', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Triple o triplete', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Ventana', 'description' => 'No registrada', 'maintenance_plan' => false, 'risk_factor_id' => null, 'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Ventilador', 'description' => 'No registrada', 'maintenance_plan' => true, 'risk_factor_id' => 4, 'category_id' => 1]);
        
        // Urgencias
        BiomedicalEquipment::create(['name' => 'Analizador de gases electrólitos y metabólicos','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Analizador hematológico','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Autoanalizador bioquímico','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Banca metálica para tres personas tipo tándem','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Centrífuga para microhematócrito','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 1 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Computadora personal','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cortina de lino plastificado incluye rie','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cubo metálico para desperdicios, con tapa accionada a pedal','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Desfibrilador con monitor y paletas externa','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 4 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Dispensador de gel para limpieza de manos','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Dispensador de toallas de papel','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Escalinata metálica de 1 peldaño','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Escalinata metálica de 2 peldaños','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Espejo adosado marco metálico de 40 x 60 cm','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Esterilizador cilíndrico eléctrico 35 L','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Extintor contra incendios, cap. 12 libras polvo químico seco','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Fluxómetro con humidificador para la red de oxígen','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Gabinetes','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Impresora','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Inodoro de cerámica vitrificada con válvula fluxómet','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera cromada con dispensador para jabón líquido','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lámpara de reconocimiento con cuello de ganso','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 6 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lámpara quirúrgica rodable','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 6 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Laringoscopio adulto/pediatrico','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavadero de acero inoxidable con 2 pozas, agua fría y caliente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavadero de acero inoxidable una poza aprox. 20” x 18”, agua fría','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavamanos de cerámica vitrificada de 20” x 18”, agua fría y calient','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavamanos de cerámica vitrificada, grifería control de mano, agua frí','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa diván para reposo o inyectables','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa especial para tópico','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa metálica rodable para múltiples usos, acero inoxidable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa metálica tipo mayo','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa rodable de acero inoxidable para curaciones','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Meseta  con cajones y abierto abajo, tablero de acero inoxidable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Meseta con cajones y puertas','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Meseta de estación de enfermeras de dos niveles con porta teclado y abierto abajo','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Meseta para empotrar lavadero con puertas, tablero de acero inoxidable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mezclador','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Microscopio binocular','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 4 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera de plástico con tapa y ventana abatible','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera metálica','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta lavatorio doble metálico rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta rollo de papel higiénico de loza','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta suero metálico rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Refrigeradora para laboratorio de 14 pies cúbicos','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Resucitador manual','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de oxígeno','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de vacío','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Secador eléctrico automático para manos','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Silla metálica giratoria rodable con asiento alto','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Silla metálica giratoria rodable, asiento alto','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Taburete metálico asiento giratorio rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Taburete metálico giratorio fij','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Teléfono de mesa','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Teléfono de pared','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Tensiómetro esfigmomanómetro fijo','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Tensiómetro rodable - adulto','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Toallero de gancho cromado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Unidad de aspiración para ser conectada a la red de vacío','description' => 'No registrada','maintenance_plan' => true,'risk_factor_id' => 2 ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Vitrina de acero inoxidable para instrumental o material estéril 68 x 45 cm','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);

        // Hospitalización
        BiomedicalEquipment::create(['name' => 'Barra cromada para cortinas','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Barra de acero para discapacitado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cama quirúrgica metálica rodable de 2 manivelas para adultos de 2.02 x 0.92 x 0.60 m (cama hospitalaria)','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Dispensador de toallas de papel','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Escalinata metálica de 1 peldaño - banco escalera','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Espejo adosado marco metálico de 40 x 60 cm','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Fluxómetro con humidificado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Inodoro de cerámica vitrificada con válvula fluxómet','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera cromada con dispensador para jabón líquido','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera de loza para ducha','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Lavamanos de cerámica vitrificada, agua fría y calient','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa metálica de noche para hospitalización','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa rodable metálica para comida paciente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Ovalín de cerámica vitrificada, grifería control de mano, agua fría y calient','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Panel cabecera mural horizontal: con salidas para,  01 oxígeno, 01 vacío, 01aire medicinal, 02 porta sueros, 04 tomacorrientes dobles estabilizados, 02 data, 01 riel, 01 iluminación interna, 01 iluminación externa, 01 llamada de enfermeras.','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera de plástico con tapa y ventana abatible','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera metálica','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta rollo de papel higiénico de loza','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta suero rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta suero rodable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Rack  de pared para TV de 32”','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de ducha de agua fría y caliente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Silla metálica apilable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sillón semiconfortable sin porta brazos unipersonal','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sumidero de bronce cromado para ducha','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Televisor a color de 32”','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Toallero de gancho cromado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Unidad de succión (frasco)','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Unidad de succión (frasco)','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Barra cromada para cortinas','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Barra de acero para discapacitado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Cortina antibacteriana tipo Oxford','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Dispensador de toallas de papel','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Escalinata metálica de 1 peldaño- banco escalera','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Espejo adosado marco metálico de 40 x 60 cm','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Fluxómetro con humidificado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera cromada con dispensador para jabón líquido','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Jabonera de loza para ducha','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'MA-17 Mesa metálica de noche para hospitalización','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Mesa rodable metálica para comida paciente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Panel cabecera mural horizontal con salidas para:  01 oxígeno, 01 vacío,  01 aire medicinal, 02 porta sueros, 04 tomacorrientes dobles estabilizados,  02 data, 01 riel, 01 iluminación interna, 01 iluminación externa, 01 llamada de enfermeras.','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera de plástico con tapa y ventana abatible','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Papelera metálica','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Porta rollo de papel higiénico de loza','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Rack  de pared para TV de 32”','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Salida de ducha de agua fría y caliente','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Silla metálica apilable','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sillón semiconfortable sin porta brazos unipersonal','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Sumidero de bronce cromado para ducha','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Televisor a color de 32”','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);
        BiomedicalEquipment::create(['name' => 'Toallero de gancho cromado','description' => 'No registrada','maintenance_plan' => false,'risk_factor_id' => null ,'category_id' => 1]);



    
    }
}
