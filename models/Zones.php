<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "zones".
 *
 * @property integer $zone_id
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Urgencies[] $urgencies
 */
class Zones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['name'], 'unique'],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'zone_id' => 'ID',
            'name' => 'Nombre',
            'created_at' => 'Fecha creación',
            'updated_at' => 'Fecha actualización',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUrgencies()
    {
        return $this->hasMany(Urgencies::className(), ['zone_id' => 'zone_id']);
    }
}
