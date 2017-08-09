<?php
use yii\widgets\DetailView;
?>
<?= DetailView::widget([
        'model' => $user,
        'attributes' => [
            'username',
            'email',
        ],
    ]) ?>
<?= DetailView::widget([
        'model' => $customer,
        'attributes' => [
            'fio',
            'phone',
            'card',
        ],
    ]) ?>