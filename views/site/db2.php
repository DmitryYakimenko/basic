<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'db2';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>Напишите запрос, который выберет имя пользователя (bids.name) с самой
высокой ценой заявки (bids.price)</b><br/>
	<b>Код</b>
	<pre>
public function actionDb2(){
	$bids = (new \yii\db\Query())->select(['bids.name', 'max(bids.price)'])->from('bids')->one();
	return $this->render('db2', [
		'bids' => $bids,
    ]);
}
	</pre>
	<b>Решение</b>
	<p>
Имя пользователя с самой высокой ценой заявки = <b><?=$bids['name']?></b><br/>

	</p>
</div>