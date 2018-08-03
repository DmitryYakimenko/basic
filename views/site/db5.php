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
которому больше всего заявок</b><br/>
	<b>Код</b>
	<pre>
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
	</pre>
	<b>Решение</b>
	<p>
название мероприятия, по
которому больше всего заявок = <b><?=$events[0]['caption']?></b><br/>

	</p>
</div>