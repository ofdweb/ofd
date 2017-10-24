<?php

namespace common\jobs;

use Yii;

/**
 * Class DeployApp.
 */
class DeployApp extends \yii\base\Object implements \yii\queue\Job
{
    public $account_id;
  
    public function init()
    {
        parent::init();
        $this->encrypt();
    }

    public function encrypt()
    {
        if ($this->account_id) {
            $this->account_id = Yii::$app->encrypter->encrypt($this->account_id);
        }
    }
  
    public function decrypt()
    {
        if (!$this->account_id) {
            Yii::error(Yii::t('app', 'Аккаунт {account} не задан', ['account' => $this->account_id]), \yii\queue\Queue::class);
            return;
        }
      
        $this->account_id = Yii::$app->encrypter->decrypt($this->account_id);
        return true;
    }

    /**
     * @inheritdoc
     */
    public function execute($queue)
    {
      var_dump('sss');die;
        if (!$this->decrypt()) {
            return;
        }
      
        if (!$this->token) {
            Yii::error(Yii::t('app', 'Токен аккаунта {account} пустой', ['account' => $this->account_id]), \yii\queue\Queue::class);
            return;
        }

        $model = \account\models\Account::find()->byId($this->account_id)->active()->one();
      
        if (!$model) {
            Yii::error(Yii::t('app', 'Аккаунт {account} не найден в системе', ['account' => $this->account_id]), \yii\queue\Queue::class);
            return;
        }
      
        if (!$model->updateApiToken($this->token)) {
            Yii::error($model->getErrors(), \yii\queue\Queue::class);
            return;
        }
    }
}


