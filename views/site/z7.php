<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Z7';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<b>Чем отличается require от include ?</b>
	<b>Решение</b>
	<p>require - при отсутствии подключаемого файла выдаст фатальную ошибку с остановкой скрипта</p>
	<p>include - при отсутствии подключаемого файла выдаст предепреждение но скрипт продолжит работу</p>
</div>