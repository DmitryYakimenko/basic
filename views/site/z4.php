<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Z4';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>Как вычислить остаток от деления 10/3</b><br/>
	<b>Код</b>
	<pre>
public function actionZ4(){
	$result = 10%3;
	return $this->render('z4', [
		'result' => $result
    ]);
}
	</pre>
	<b>Решение</b>
	<p>Результат = <?=$result?></p>

</div>