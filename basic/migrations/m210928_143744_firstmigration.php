<?php

use yii\db\Migration;

/**
 * Class m210928_143744_firstmigration
 */
class m210928_143744_firstmigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('app_users', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->unique()->notNull(),
            'password' => $this->string(255),
        ]);
        $this->createTable('todos', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'decription' => $this->text()->notNull(),
            'created_at' => $this->timestamp(),
            'checked' => $this->boolean()->defaultValue(false)
        ]);
        $this->addForeignKey('todos_user', 'todos', 'user_id', 'app_users', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210928_143744_firstmigration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210928_143744_firstmigration cannot be reverted.\n";

        return false;
    }
    */
}
