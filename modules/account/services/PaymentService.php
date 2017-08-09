<?php

namespace app\modules\account\services;

use app\modules\account\models\Payment;
use yii\helpers\ArrayHelper;

/**
* Класс со вспомогательными методами для работы с моделью
*/
class PaymentService
{
    /**
     * Поиск модели по атрибуту id
     * @param integer $id id модели
     * @return Payment
     */
    public function findById($id)
    {
        return Payment::find()
            ->where([
                'id' => $id
            ])
            ->one();
    }

    /**
     * Поиск модели по атрибуту user_id
     * @param integer $id user_id
     * @return Payment
     */
    public function findByUserId($id)
    {
        return Payment::find()
            ->where([
                'user_id' => $id
            ])
            ->all();
    }

    /**
     * Возвращает названия статусов модели
     * @return array
     */
    public static function statusList(): array
    {
        return [
            Payment::NOT_PAID => 'Не оплачено',
            Payment::PAID => 'Оплачено',
        ];
    }

    /**
     * Возвращает название статуса
     * @param integer $status статус
     * @return string
     */
    public static function statusName($status): string
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }
}
