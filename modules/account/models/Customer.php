<?php

namespace app\modules\account\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $fio
 * @property string $phone
 * @property string $card
 * @property int $user_id
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'phone', 'card', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['fio', 'phone', 'card'], 'string', 'max' => 255],
            [['fio'], 'unique'],
            [['phone'], 'unique'],
            [['card'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'phone' => 'Телефон',
            'card' => 'Номер карты',
            'user_id' => 'User ID',
        ];
    }
}
