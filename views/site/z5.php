<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Z5';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>Нужно поменять 2 переменные местами без использования третьей:</b>
<pre>
$а = [1,2,3,4,5];
$b = ‘Hello world’;
</pre>
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
	<p>a = <?=$a?></p>
	<p>b = <?=implode(', ', $b)?></p>
</div>