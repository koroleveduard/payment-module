<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php if($link == null):?>

<p>Введите сумму, которую хотите оплатить!</p>

<?php $form = ActiveForm::begin();?>
	<?= $form->field($model, 'summ')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'user_id')->hiddenInput([
		'value' => Yii::$app->user->identity->id
	])->label(false); ?>
	<?= $form->field($model, 'paid')->hiddenInput([
		'value' => 0
	])->label(false); ?>
	<?= Html::submitButton('Оплатить!', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<?php ActiveForm::end();?>


<?php else:?>
	<p>Счёт выставлен! Посмотреть счет можно по <?=Html::a('ссылке',$link);?></p>
<?php endif;?>