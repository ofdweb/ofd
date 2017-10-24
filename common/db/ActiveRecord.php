<?php

namespace common\db;

use common\models\Account;
use common\models\User;
use common\modules\logger\models\Log;

abstract class ActiveRecord extends \yii\db\ActiveRecord 
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = [];
      
        if ($this->hasAttribute('created_at')) {
          $behaviors['timestamp'] = \yii\behaviors\TimestampBehavior::className();
        }
        if ($this->hasAttribute('created_by')) {
          $behaviors['blameable'] = \yii\behaviors\BlameableBehavior::className();
        }
        if ($this->hasAttribute('is_deleted')) {
          $behaviors['delete'] = \common\behaviors\SoftDeleteBehavior::className();
        }
          
        return $behaviors;
    }
  
    /**
     * @inheritdoc
     */
    public static function find()
    {
        return new BaseQuery(get_called_class());
    }
    
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'account_id'])->where(['is_deleted' => IS_NOT_DELETED]);
    }
    
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
  
    public function addLogEvent($text)
    {
        \Yii::info($text, Log::CATEGORY_EVENT . '|' . get_class($this) . '|' . $this->primaryKey);
    }
  
    public function addLogNotify($text)
    {
        \Yii::info($text, Log::CATEGORY_NOTIFY . '|' . get_class($this) . '|' . $this->primaryKey);
    }
  
    public function addLogError($text)
    {
        \Yii::error($text, Log::CATEGORY_ERROR . '|' . get_class($this) . '|' . $this->primaryKey);
    }
  
    public function addLogWarning($text)
    {
        \Yii::warning($text, Log::CATEGORY_WARNING . '|' . get_class($this) . '|' . $this->primaryKey);
    }
}