<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "opf".
 *
 * @property integer $code
 * @property string $short
 * @property string $full
 */
class Opf extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'opf';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['short'], 'string', 'max' => 32],
            [['full'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => Yii::t('app', 'Код'),
            'short' => Yii::t('app', 'Краткое название ОПФ'),
            'full' => Yii::t('app', 'Полное название ОПФ'),
        ];
    }
  
    /**
     * @inheritdoc
     */
    public static function find()
    {
        return new \common\db\BaseQuery(get_called_class());
    }
}
