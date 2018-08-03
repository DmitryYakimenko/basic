<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Z9';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>Что выведет следующий код на JavaScript и почему:</b>
	<p><pre>
for( var i =0; i < 10; i++){
	setTimeout(function () {
		console.log(i);
	}, 100);
}
		</pre>
	</p>Решение</b>
	<p>10 раз выведется 10, так как функция setTimeout должна вывести текущее значение i через 100 мс i к этому моменту будет 10</p>
</div>