<?php

use yii\db\Migration;

/**
 * Class m170808_170158_create_table_payment
 */
class m170808_170158_create_table_payment extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%payment}}', [
            'id' => $this->primaryKey(),
            'summ' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'paid' => $this->integer()->notNull(),
        ], $tableOptions);


    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%payment}}');
    }
}
