<?php

namespace account\modules\company\models;

use Yii;
use account\models\Account;
use common\components\Dadata;
use common\models\User;
use common\models\Opf;
/**
 * This is the model class for table "companys".
 *
 * @property integer $id
 * @property string $name_short
 * @property string $name_full
 * @property integer $opf_id
 * @property integer $inn
 * @property integer $kpp
 * @property string $ogrn
 * @property string $okpo
 * @property string $okved
 * @property integer $account_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $is_deleted
 */
class Company extends \common\db\ActiveRecord
{
    public $name;
    public $address;
    public $opf;
  
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_short', 'inn', 'account_id'], 'required'],
            [['opf_id', 'inn', 'kpp', 'account_id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'is_deleted'], 'integer'],
            [['name_short', 'name_full'], 'string', 'max' => 255],
            [['ogrn', 'okpo', 'okved'], 'string', 'max' => 32],
            [['name', 'address', 'opf'], 'isArray', 'skipOnEmpty' => true],
            ['account_id', 'exist', 'targetClass' => Account::class, 'targetAttribute' => 'id'] 
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_short' => Yii::t('app', 'Name'),
            'name_full' => Yii::t('app', 'Name Full'),
            'opf_id' => Yii::t('app', 'Opf ID'),
            'inn' => Yii::t('app', 'Inn'),
            'kpp' => Yii::t('app', 'Kpp'),
            'ogrn' => Yii::t('app', 'Ogrn'),
            'okpo' => Yii::t('app', 'Okpo'),
            'okved' => Yii::t('app', 'Okved'),
            'account_id' => Yii::t('app', 'Account ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
        ];
    }
  
    public function isArray($attribute, $params)
    {
         if (!is_array ($this->$attribute)) {
             $this->addError($attribute, Yii::t('app', '{attribute} должен быть массивом', ['attribute' => $attribute]));
         }
    }
  
    /**
     * @inheritdoc
     */
    public function setAttributes($values, $safeOnly = true)
    {
        parent::setAttributes($values, $safeOnly);

        if ($this->name) {
          $this->name_short = $this->name['short'];
          $this->name_full = $this->name['full'];
        }
    } 
  
    public function getOpfItem()
    {
        return $this->hasOne(Opf::className(), ['id' => 'opf_id']);
    }
  
    public function getAddresses()
    {
        return $this->hasMany(CompanyAddress::className(), ['company_id' => 'id']);
    }
    
    public static function loadFromDadata($query)
    {
        $client = new Dadata();
      
        if ($data = $client->party($query)) {
          $model = new self();
          $model->setAttributes(current($data)['data']);

          return $model;
        }
        
      return false;
    }
    
    public function signupToUser(User $user)
    {
        $this->setAttributes([
            'created_by' => $user->id,
            'updated_by' => $user->id,
            'account_id' => $user->account_id
        ]);
        $this->detachBehavior('blameable');
        
        if ($this->save()) {
          $this->linkOpfData();
          $this->appendAddressData();
          
          $this->addLogEvent(Yii::t('Добавил компанию: {company}', ['company' => $this->name_short]));
          
          return true;
        }
      
        return false;
    }
  
    public function appendAddressData()
    {
        if ($this->address && $this->address['data']) {
          $model = new CompanyAddress();
          $model->setAttributes($this->address['data']);
          
          if (Yii::$app->user->isGuest) {
            $model->setAttributes([
                'created_by' => $this->created_by,
                'updated_by' => $this->updated_by,
            ]);
            $model->detachBehavior('blameable');
          }
          
          if ($model->save()) {
            $this->link('addresses', $model);
          }
        }
    }
  
    public function linkOpfData()
    {
        if ($this->opf) {
            $model = Opf::find()->oneByParams([
              'code' => $this->opf['code'], 
              'short' => $this->opf['short']
            ]);
            
            if (!$model) {
              $model = new Opf($this->opf);
              $model->save();
            }

            if (!$model->isNewRecord) {
              $this->link('opfItem', $model);
            }
        }
    }
}
