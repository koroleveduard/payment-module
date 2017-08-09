<?php
use app\modules\account\services\PaymentService;
use yii\helpers\Html;
?>
<p>Ваши счета за ООО "Задание"</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Сумма</th>
			<th>Статус</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($models as $model):?>
		<tr>
			<td><?=$model->summ;?></td>
			<td><?=PaymentService::statusName($model->paid);?></td>
			<td><?=Html::a('Подробности',['/account/payment/show','id'=>$model->id]);?></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>