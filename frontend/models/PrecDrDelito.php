<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prec_dr_delito".
 *
 * @property integer $id_delito
 * @property string $tx_delito
 * @property string $icon_name
 * @property string $imagen
 *
 * @property PrecBandaDelito[] $precBandaDelitos
 * @property PrecBanda[] $idBandas
 * @property PrecCrimen[] $precCrimens
 * @property TempCrimen[] $tempCrimens
 * @property TempCrimenInvolucrado[] $tempCrimenInvolucrados
 */
class PrecDrDelito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prec_dr_delito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tx_delito', 'icon_name'], 'required'],
            [['tx_delito'], 'string', 'max' => 45],
            [['icon_name'], 'string', 'max' => 20],
            [['imagen'], 'string', 'max' => 300],
            [['tx_delito'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_delito' => 'Id Delito',
            'tx_delito' => 'Tx Delito',
            'icon_name' => 'Icon Name',
            'imagen' => 'Imagen',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrecBandaDelitos()
    {
        return $this->hasMany(PrecBandaDelito::className(), ['id_delito' => 'id_delito']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBandas()
    {
        return $this->hasMany(PrecBanda::className(), ['id_banda' => 'id_banda'])->viaTable('prec_banda_delito', ['id_delito' => 'id_delito']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrecCrimens()
    {
        return $this->hasMany(PrecCrimen::className(), ['id_delito' => 'id_delito']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTempCrimens()
    {
        return $this->hasMany(TempCrimen::className(), ['id_delito' => 'id_delito']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTempCrimenInvolucrados()
    {
        return $this->hasMany(TempCrimenInvolucrado::className(), ['id_color_piel' => 'id_delito']);
    }
}
