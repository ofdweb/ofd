<?php

namespace common\modules\logger\models;

use Yii;
use account\models\Account;
/**
 * This is the model class for table "logs".
 *
 * @property string $id
 * @property string $message
 * @property string $model_class
 * @property integer $model_id
 * @property string $category
 * @property integer $created_by
 * @property integer $created_at
 */
class Log extends \common\db\ActiveRecord
{
    const CATEGORY_EVENT = 'event';
    const CATEGORY_NOTIFY = 'notify';
    const CATEGORY_ERROR = 'error';
    const CATEGORY_WARNING = 'warning';
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'target_logs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_id', 'created_by', 'created_at'], 'integer'],
            [['message', 'category'], 'string', 'max' => 255],
            [['model_class'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'message' => Yii::t('app', 'Событие'),
            'model_class' => Yii::t('app', 'Модель'),
            'model_id' => Yii::t('app', 'Модель'),
            'category' => Yii::t('app', 'Категория'),
            'created_by' => Yii::t('app', 'Автор'),
            'created_at' => Yii::t('app', 'Дата'),
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'account_id'])->via('author');
    }
    
    public function getIconClass()
    {
        return 'time';
    }

}
