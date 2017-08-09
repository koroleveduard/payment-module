<?php

use yii\db\Migration;

/**
 * Class m170808_170147_create_table_customer
 */
class m170808_170147_create_table_customer extends Migration
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

        $this->createTable('{{%customer}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string()->notNull()->unique(),
            'phone' => $this->string()->notNull()->unique(),
            'card' => $this->string()->notNull()->unique(),
            'user_id' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%customer}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170808_170147_create_table_customer cannot be reverted.\n";

        return false;
    }
    */
}
