<?php

use yii\db\Migration;

class m170923_215713_data_zones extends Migration
{
    public function safeUp()
    {
        $this->batchInsert(
            '{{%zones}}',
            [
                'zone_id',
                'name',
                'created_at',
                'updated_at'
            ],
            [
                ['zone_id' => 1, 'name' => 'Aeropuerto', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 2, 'name' => 'Álvaro Obregón', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 3, 'name' => 'Anahuac', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 4, 'name' => 'Anzures', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 5, 'name' => 'Benito Juárez', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 6, 'name' => 'CD Deportes', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 7, 'name' => 'CDMX', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 8, 'name' => 'Centro', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 9, 'name' => 'Chalco', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 10, 'name' => 'Chapultepec', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 11, 'name' => 'Ciudad Universitaria', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 12, 'name' => 'Coapa', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 13, 'name' => 'Condesa', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 14, 'name' => 'Copilco', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 15, 'name' => 'Coyoacán', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 16, 'name' => 'Cuajimalpa', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 17, 'name' => 'Culhuacan', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 18, 'name' => 'Del Valle', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 19, 'name' => 'Doctores', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 20, 'name' => 'Edo. Mex', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 21, 'name' => 'Ermita', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 22, 'name' => 'Hipódromo Condesa', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 23, 'name' => 'Iztapalapa', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 24, 'name' => 'Jardines Del Pedregal', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 25, 'name' => 'Lindavista', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 26, 'name' => 'Lomas De Chapultepec', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 27, 'name' => 'Magdalena Contreras', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 28, 'name' => 'Mixcoac', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 29, 'name' => 'Morelos', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 30, 'name' => 'Napoles', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 31, 'name' => 'Narvarte', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 32, 'name' => 'Norte', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 33, 'name' => 'Oaxaca', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 34, 'name' => 'Obrera', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 35, 'name' => 'Piedad Narvarte', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 36, 'name' => 'Polanco', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 37, 'name' => 'Popotla', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 38, 'name' => 'Portales', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 39, 'name' => 'Puebla', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 40, 'name' => 'Roma', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 41, 'name' => 'Roma Norte', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 42, 'name' => 'Roma Sur', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 43, 'name' => 'Santa Cruz Atoyac', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 44, 'name' => 'Santa Maria Nativitas', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 45, 'name' => 'Santa Úrsula Coapa', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 46, 'name' => 'Satelite', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 47, 'name' => 'Satélite/Jojutla', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 48, 'name' => 'Sta Cruz Meyehualco', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 49, 'name' => 'Sur', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 50, 'name' => 'Taxqueña', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 51, 'name' => 'Tlahuac', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 52, 'name' => 'Tlalpan', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 53, 'name' => 'Tlaxcala', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 54, 'name' => 'Tránsito', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 55, 'name' => 'Valle Del Centro', 'created_at' => '1506204357', 'updated_at' => '1506204357'],
                ['zone_id' => 56, 'name' => 'Xochimilco', 'created_at' => '1506204357', 'updated_at' => '1506204357']
            ]
        );
    }

    public function safeDown()
    {
        $this->delete('{{zones}}');
    }
}
