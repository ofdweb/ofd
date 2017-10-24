<?php

namespace account\modules\project\models;

use Yii;
use account\modules\company\models\Company;
use account\models\Account;
/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property integer $company_id
 * @property string $name
 * @property string $url
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $is_deleted
 */
class Project extends \common\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'url'], 'required'],
            [['company_id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'is_deleted'], 'integer'],
            [['name', 'url'], 'string', 'max' => 128],
            ['company_id', 'exist', 'targetClass' => Company::class, 'targetAttribute' => 'id'],
            ['name', 'default', 'value' => function ($model, $attribute) {
                return parse_url($model->url, PHP_URL_HOST);
            }],
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
            'name' => Yii::t('app', 'Проект'),
            'url' => Yii::t('app', 'Url'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'account_id'])->via('company');
    }
    
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }
    
    public function getNameItem()
    {
        return $this->name;
    }
  
    public function signupToCompany(Company $company)
    {
        $this->setAttributes([
            'created_by' => $company->created_by,
            'updated_by' => $company->updated_by,
            'company_id' => $company->id
        ]);
        $this->detachBehavior('blameable');
      
        if ($this->save()) {
            $this->addLogEvent(Yii::t('Добавил новый проект: {project}', ['project' => $this->name]));
          
            return true;
        }

        return false;
    }
}
