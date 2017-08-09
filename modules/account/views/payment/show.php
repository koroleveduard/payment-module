<?php
use yii\widgets\DetailView;
use app\modules\account\services\PaymentService;
?>

<p>Вам выставлен счёт от компании ООО "Задание"</p>
<?=DetailView::widget([
	'model' => $model,
	'attributes' => [
		'summ',
		[
			'label' => 'Статус',
			'value' => PaymentService::statusName($model->paid)
		]
	]
]);?>