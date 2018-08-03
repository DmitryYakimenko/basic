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
которому больше трех заявок</b><br/>
	<b>Код</b>
	<pre>
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
	</pre>
	<b>Решение</b>
	<p>
 название мероприятия (events.caption), по
которому больше трех заявок = <b><?=$events[0]['caption']?$events[0]['caption']:'События нет'?></b><br/>

	</p>
</div>