<?php

namespace account\modules\company\models;

use Yii;

/**
 * This is the model class for table "company_addresses".
 *
 * @property integer $id
 * @property integer $company_id
 * @property integer $postal_code
 * @property string $country
 * @property string $region
 * @property string $area
 * @property string $city
 * @property string $street
 * @property string $city_district
 * @property string $house
 * @property string $block
 * @property string $flat
 * @property double $geo_lat
 * @property double $geo_lon
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $is_deleted
 */
class CompanyAddress extends \common\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_addresses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'postal_code', 'created_by', 'updated_by', 'created_at', 'updated_at', 'is_deleted'], 'integer'],
            [['geo_lat', 'geo_lon'], 'number'],
            [['country', 'region', 'area', 'city', 'street', 'city_district'], 'string', 'max' => 128],
            [['house', 'block', 'flat'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'company_id' => Yii::t('app', 'Компания'),
            'postal_code' => Yii::t('app', 'Индекс'),
            'country' => Yii::t('app', 'Страна'),
            'region' => Yii::t('app', 'Регион'),
            'area' => Yii::t('app', 'Район'),
            'city' => Yii::t('app', 'Город'),
            'street' => Yii::t('app', 'Улица'),
            'city_district' => Yii::t('app', 'Район города'),
            'house' => Yii::t('app', 'Дом'),
            'block' => Yii::t('app', 'Корпус'),
            'flat' => Yii::t('app', 'Квартира'),
            'geo_lat' => Yii::t('app', 'Координаты'),
            'geo_lon' => Yii::t('app', 'Координаты'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
        ];
    }
}
