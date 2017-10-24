<?php

namespace account\models;

use Yii;
use common\models\User;
use common\jobs\SignupAccount;

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
            [['access_token_api'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'access_token_api' => Yii::t('app', 'Access Token Api'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
        ];
    }
    
    public static function signupToUser(User $user)
    {
        $model = new static([
            'created_by' => $user->id,
            'updated_by' => $user->id
        ]);
        $model->detachBehavior('blameable');
        
        return $model->save() ? $model : false;
    }
  
    public function updateApiToken($token)
    {
        $this->setAttribute('access_token_api', $token);
        return $this->save();
    }
  
    public function signupToApi()
    {
        $job = new SignupAccount([
          'account_id' => $this->id
        ]);
        
        $job->encrypt();
        Yii::$app->queueApi->push($job); 
    }
}
