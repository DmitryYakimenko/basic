<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Events;
use app\models\Bids;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
	
	public function actionZ1(){
		$students = 28;
		$result = ($students * 75) / 100;
		return $this->render('z1', [
            'students' => $students,
			'result' => $result
        ]);
	}
	
	public function actionZ2(){
		$string = 'This server has 386 GB RAM and 5000 GB storage';
		$explode = explode(' ', $string);
		foreach ($explode as $element){
			if(ctype_digit($element)){
				$result[] = $element;
			}
		}
		return $this->render('z2', [
			'result' => $result
        ]);
	}
	
	
	public function actionZ3(){
		$array = array(2,3,56,65,56,44,34,45,3,5,35,345,3,5);
		$result1 = $array[0];
		$result2 = array_shift($array);
		return $this->render('z3', [
			'result1' => $result1,
			'result2' => $result2,
        ]);
	}
	
	public function actionZ4(){
		$result = 10%3;
		return $this->render('z4', [
			'result' => $result
        ]);
	}
	
	public function actionZ5(){
		$a = [1,2,3,4,5];
		$b = 'Hello world';
		list($b, $a) = array($a, $b);
		return $this->render('z5', [
			'a' => $a,
			'b' => $b,
        ]);
	}
	
	public function actionZ6(){
		$a = (1 == '1');
		$b = (1 === '1');
		return $this->render('z6', [
			'a' => $a,
			'b' => $b,
        ]);
	}
	
	public function actionZ7(){
		return $this->render('z7');
	}
	
	public function actionZ8(){
		return $this->render('z8');
	}
	
	public function actionZ9(){
		return $this->render('z9');
	}
	
	public function actionDb1(){
		return $this->render('db1');
	}
	
	public function actionDb2(){
		$bids = (new \yii\db\Query())
			->select(['bids.name', 'max(bids.price)'])
			->from('bids')
			->one();
		return $this->render('db3', [
			'bids' => $bids,
        ]);
	}
	
	public function actionDb3(){

		$events = (new \yii\db\Query())
			->select(['caption'])
			->from('bids')
			->join('right JOIN', 'events', 'events.id = bids.id_event')
			->where(['IsNull(bids.id_event)' => 1])
			->all();
		return $this->render('db3', [
			'events' => $events,
        ]);
	}
	
	public function actionDb4(){
		$events = (new \yii\db\Query())
			->select(['*, count(events.id)'])
			->from('bids')
			->join('right JOIN', 'events', 'events.id = bids.id_event')
			->having(['>', 'count(events.id)', 3])
			->groupBy('events.id')
			->all();

		return $this->render('db4', [
			'events' => $events,
        ]);
	}
	
	public function actionDb5(){
		$events = 
			(new \yii\db\Query())
			->select('*, max(count)' )
			->from(['s' =>
				(new \yii\db\Query())
				->select(['caption','count' => 'count(events.id)'])
				->from('bids')
				->join('right JOIN', 'events', 'events.id = bids.id_event')
				->groupBy('events.id')
				])
			->all();
		return $this->render('db5', [
			'events' => $events,
        ]);
	}
	

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
