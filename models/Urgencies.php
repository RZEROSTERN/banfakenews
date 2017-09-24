<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "urgencies".
 *
 * @property integer $urgency_id
 * @property integer $zone_id
 * @property string $level
 * @property string $need_brigade
 * @property string $supplies_required
 * @property string $supplies_accept
 * @property string $supplies_not_required
 * @property string $address
 * @property string $detail_source
 * @property string $last_updated
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Zones $zone
 */
class Urgencies extends \yii\db\ActiveRecord
{
    private static $levels = [
        'alto' => 'Alto',
        'medio' => 'Medio',
        'bajo' => 'Bajo'
    ];

    private static $need_brigade_values = [
        'si' => 'Sí',
        'no' => 'No',
        'relevos' => 'Relevos',
        '-' => '-'
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urgencies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zone_id', 'level'], 'required'],
            [['zone_id', 'created_at', 'updated_at'], 'integer'],
            [['level', 'need_brigade', 'supplies_required', 'supplies_accept', 'supplies_not_required'], 'string'],
            [['address', 'detail_source'], 'string', 'max' => 250]
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at'
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'urgency_id' => 'ID',
            'zone_id' => 'Zona',
            'level' => 'Nivel',
            'need_brigade' => '¿Necesitan brigadistas?',
            'supplies_required' => 'Insumos necesarios',
            'supplies_accept' => 'Insumos que aceptan',
            'supplies_not_required' => 'Insumos no requeridos',
            'address' => 'Dirección',
            'detail_source' => 'Detalle/Origen/Fuente',
            'last_updated' => 'Actualización',
            'created_at' => 'Fecha creación',
            'updated_at' => 'Fecha actualización',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZone()
    {
        return $this->hasOne(Zones::className(), ['zone_id' => 'zone_id']);
    }

    /**
     * Devuelve los Niveles de Urgencia
     *
     * @return array
     * @author Raúl Cruz Carmona <cruzcraul@gmail.com>
     */
    public static function getLevels()
    {
        return self::$levels;
    }

    /**
     * Devuelve un array con los valores para indicar si se necesitan brigadistas
     *
     * @return array
     * @author Raúl Cruz Carmona <cruzcraul@gmail.com>
     */
    public static function getNeedBrigadeValues()
    {
        return self::$need_brigade_values;
    }
}
