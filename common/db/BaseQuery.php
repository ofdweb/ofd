<?php

namespace common\db;

class BaseQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        return property_exists ($this->modelClass, 'is_deleted') ? $this->andWhere(['is_deleted' => IS_NOT_DELETED]) : $this;
    }
  
    public function unActive()
    {
        return property_exists ($this->modelClass, 'is_deleted') ? $this->andWhere(['is_deleted' => IS_DELETED]) : $this;
    }
  
    public function account()
    {
        $this->joinWith(['account AS account' => function($q) {
            $q->where(['account.id' => \Yii::$app->getUser()->identity->accountId]);
        }]);
        return $this;
    }
    
    public function byParams($params = []) 
    {
        return $params ? $this->andWhere($params) : $this;
    }
  
    public function byId($id) 
    {
        return $this->andWhere(['id' => $id]);
    }
  
    public function allByParams($params = []) 
    {
        return $this->byParams($params)->all();
    }
  
    public function oneByParams($params = []) 
    {
        return $this->byParams($params)->one();
    }
}