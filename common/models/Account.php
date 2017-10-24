<?php

namespace common\models;

use Yii;
use common\models\User;
use common\jobs\DeployApp;

/**
 * This is the model class for table "accounts".
 *
 * @property integer $id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Account extends \common\db\ActiveRecord
{
    const STATUS_DISABLED = 0;
    const STATUS_ACTIVE = 10;
    const STATUS_WAIT = 20;
    const STATUS_ERROR = 30;
  
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            ['status', 'default', 'value' => self::STATUS_DISABLED],
           // [['access_token_api'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            //'access_token_api' => Yii::t('app', 'Access Token Api'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
        ];
    }
    
    public function statusIsWait()
    {
        return $this->status == self::STATUS_WAIT;
    }
    
    public function statusIsActive()
    {
        return $this->status == self::STATUS_ACTIVE;
    }
    
    public function statusIsDisabled()
    {
        return $this->status == self::STATUS_DISABLED;
    }
    
    public static function signupToUser(User $user)
    {
        $model = new static([
            'created_by' => $user->id,
            'updated_by' => $user->id,
            'status' => self::STATUS_WAIT
        ]);
        $model->detachBehavior('blameable');
        
        return $model->save() ? $model : false;
    }

    public function deployApp()
    {
        $job = new DeployApp([
          'account_id' => $this->id
        ]);

        Yii::$app->queueWeb->push($job); 
    }
}
