<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class CallbackForm extends Model
{
    public $name;
    public $phone;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email are required
            [['name', 'phone'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Имя'),
            'phone' => Yii::t('app', 'Телефон')
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function save()
    {
        return true;
    }
}
