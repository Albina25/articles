<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m221018_173146_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(10)->defaultValue(1),
            'title' => $this->string(255),
            'excerpt' => $this->string(255),
            'content' => $this->text(),
            'created_at' => $this->dateTime(),
            'keywords' => $this->string(255),
            'description' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
