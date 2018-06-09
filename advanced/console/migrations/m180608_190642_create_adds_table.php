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
        $this->createTable('ads',[
            "id"=>'pk',
            "sort"=>'integer',
            "item"=>"string",
            "price"=>$this->float(),
            "vendor"=>"string"

        ],'ENGINE=InnoDB','CHARACTER SET=utf8','COLLATE=utf8_general_ci');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('adds');
    }
}
