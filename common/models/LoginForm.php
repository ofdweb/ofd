<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['username', 'validateLogin'],
            ['username', 'trim'],
            //['password', 'validatePassword'],
        ];
    }
  
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'Логин'),
            'password' => Yii::t('app', 'Пароль'),
            'rememberMe' => Yii::t('app', 'Запомнить меня')
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, Yii::t('app', 'Неправильный логин или пароль'));
            }
        }
    }
  
    public function validateLogin($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if (!$this->getUser()) {
                $this->addError($attribute, Yii::t('app', 'Неправильный логин'));
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }
  

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::find()->where(['email' => Yii::$app->encrypter->encrypt($this->username)])->one();
        }

        return $this->_user;
    }
  
    public function renderForm()
    {
        $model = new self();
        return \Yii::$app->view->render('@app/views/site/loginForm', compact('model'));
    }
  
    public function renderUserMenu()
    {
        $model = Yii::$app->user->identity;
        return \Yii::$app->view->render('@app/views/layouts/misk/user_menu', compact('model'));
    }
}
