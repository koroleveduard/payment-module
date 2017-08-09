<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin();?>
	<?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'phone')->textInput() ?>
	<?= $form->field($model, 'card')->textInput() ?>
	<?= $form->field($model, 'user_id')->hiddenInput([
		'value' => Yii::$app->user->identity->id
	])->label(false); ?>
	<?= Html::submitButton('Сохранить!', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<?php ActiveForm::end();?>
