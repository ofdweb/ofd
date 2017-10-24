<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
//use account\modules\company\models\Company;
//use account\modules\project\models\Project;
use common\models\Account;
/**
 * Signup form
 */
class SignupForm extends Model
{
   // public $username;
    public $email;
    public $password;
    public $inn;
    public $url;
    public $code;
    public $rules;
    public $order_rules;
    public $company_search;
  
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
         /*   ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => User::class, 'message' => Yii::t('app', 'Такой пользователь уже существует')],
            ['username', 'string', 'min' => 2, 'max' => 255],
         */
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => User::class, 'filter' => function($query) {
                return $query->orWhere(['email' => Yii::$app->encrypter->encrypt($this->email)]);
            }, 'message' => Yii::t('app', 'Такой Email уже существует')],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
          
            ['inn', 'string', 'min' => 10, 'max' => 12, 'message' => Yii::t('app', 'Некорректный ИНН')],
         //   ['inn', 'unique', 'targetClass' => Company::class, 'message' => Yii::t('app', 'Такая компания уже существует')],
            ['inn', 'trim'],
            ['inn', 'number'],
          
            [['company_search', 'inn'], 'required', 'when' => function ($model) {
                return !(empty($model->url));
            }, 'whenClient' => "function (attribute, value) {
                return $('#signupform-url').val().length > 0;
            }"],
            ['company_search', 'trim'],

            ['url', 'url', 'defaultScheme' => 'https', 'message' => Yii::t('app', 'Некорректный URL')],
        /*    ['url', 'unique', 'targetClass' => Project::class, 'filter' => function($query) {
                $url = parse_url($this->url, PHP_URL_HOST);
                $urls = [$url, 'http://' . $url, 'https://' . $url];
                
                return $query->andWhere(['url' => $urls]);
            }, 'message' => Yii::t('app', 'Такой Url уже существует')], */
            ['url', 'trim'],
                      
           // ['code', 'unique', 'targetClass' => User::className, 'message' => Yii::t('app', 'Такой Email уже существует')],
            ['code', 'trim'],
          
            [['rules', 'order_rules'], 'required'],
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
            'company_search' => Yii::t('app', 'ИНН или название компании'),
            'inn' => Yii::t('app', 'ИНН'),
            'email' => Yii::t('app', 'Email'),
            'url' => Yii::t('app', 'URL сайта'),
            'code' => Yii::t('app', 'Промокод'),
            'rules' => Yii::t('app', 'Пользовательское соглашение'),
            'order_rules' => Yii::t('app', 'Условия договора'),
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $transaction =  \Yii::$app->db->beginTransaction();
      
        try {
            $user = new User([
              //'username' => $this->username,
              'email' => $this->email,
              'scenario' => User::SCENARIO_SIGNUP
            ]);

            //$user->setPassword($this->password);
            $user->generateAuthKey();

            if ($user->signup()) {
                $account = Account::signupToUser($user);
                
                if ($account) {
                    $user->link('account', $account);
                    
                /*    if ($this->inn) {
                        $modelCompany = Company::loadFromDadata($this->inn);
                        
                        if ($modelCompany) {
                            $modelCompany->signupToUser($user);
                          
                            if ($this->url) {
                              $modelProject = new Project(['url' => $this->url]);
                              $modelProject->signupToCompany($modelCompany);
                            }
                        }
                    } */
            
                    $transaction->commit();
                    $account->deployApp();

                    return $user;
                }
            }

            $transaction->rollBack();
        } catch(\Exception $e) {
            $transaction->rollBack();
            throw $e;
        } catch(\Throwable $e) {
            $transaction->rollBack();
            throw $e;
        }
      
        return null;
    }
}
