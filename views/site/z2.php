<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Z2';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>Реализовать алгоритм извлечения числовых значений со строки:</b>
	<p>This server has 386 GB RAM and 5000 GB storage</p>
	<b>Код</b>
	<pre>
public function actionZ2(){
	$sting = 'This server has 386 GB RAM and 5000 GB storage';
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
	</pre>
	<b>Решение</b>
	<p>
		<?php
			$count = 1;
			foreach($result as $element){
				echo($count.' цифра = '.$element.'<br/>');
				$count++;
			}
		?>
	</p>
</div>