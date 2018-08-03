<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Z3';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>​Как получить первый элемент массива ​[2,3,56,65,56,44,34,45,3,5,35,345,3,5] ​?<br/>
	<b>Код</b>
	<pre>
public function actionZ3(){
	$array = array(2,3,56,65,56,44,34,45,3,5,35,345,3,5);
	$result1 = $array[0];
	$result2 = array_shift($array);
	return $this->render('z3', [
		'result1' => $result1,
		'result2' => $result2,
       ]);
}
	</pre>
	<b>Решение</b>
	<p>1 способ = <?=$result1?></p>
	<p>2 способ = <?=$result2?></p>
</div>