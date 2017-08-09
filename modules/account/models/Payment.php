<?php

namespace app\modules\account\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property int $summ
 * @property int $user_id
 * @property int $paid
 */
class Payment extends \yii\db\ActiveRecord
{
    const NOT_PAID = 0;
    const PAID = 1;

    public static function tableName()
    {
        return 'payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['summ', 'user_id', 'paid'], 'required'],
            [['summ', 'user_id', 'paid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'summ' => 'Сумма',
            'user_id' => 'User ID',
            'paid' => 'Статус',
        ];
    }
}
