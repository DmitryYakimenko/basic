<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'db3';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>Напишите запрос, который выберет название мероприятия (events.caption), по
которому нет заявок</b><br/>
	<b>Код</b>
	<pre>
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
	</pre>
	<b>Решение</b>
	<p>
 Название мероприятия, по которому нет заявок = <b><?=$events[0]['caption']?></b><br/>

	</p>
</div>