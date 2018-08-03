<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Z6';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>Чем отличается оператор == от === ?</b>
	<b>Код</b>
	<pre>
public function actionZ5(){
	$a = [1,2,3,4,5];
	$b = 'Hello world';
	list($b, $a) = array($a, $b);
	return $this->render('z5', [
		'a' => $a,
		'b' => $b,
       ]);
}
	</pre>
	<b>Решение</b>
	<p>1 == '1' = <?=var_dump($a)?></p>
	<p>1 === '1' = <?=var_dump($b)?></p>
</div>