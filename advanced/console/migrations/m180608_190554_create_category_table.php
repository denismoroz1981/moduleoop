<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180608_190554_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name'=>'string'
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('category');
    }
}
