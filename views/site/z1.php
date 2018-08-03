<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Z1';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>Написать алгоритм решения задачи:</b>
	<p>В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе
	занимаются спортом и сколько всего учеников в классе?</p>
	<b>Код</b>
	<pre>
public function actionZ1(){
	$students = 28;
	$result = ($students * 75) / 100;
	return $this->render('z1', [
		'students' => $students,
		'result' => $result
		]);
	}
	</pre>
	<b>Решение</b>
	<p>
		Занимаются спортом <?=$result?><br/>
		Всего учеников в классе <?=$students?>
	</p>
</div>