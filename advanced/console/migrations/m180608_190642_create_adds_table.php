<?php

use yii\db\Migration;

/**
 * Handles the creation of table `adds`.
 */
class m180608_190642_create_adds_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('adds', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('adds');
    }
}
