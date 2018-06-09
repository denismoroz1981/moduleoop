<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180608_190555_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news',[
            'id'=> 'pk',
            'name'=>'string',
            'text_head'=>'string',
            'text_main'=>'string',
            'photo'=>'string',
            'visitors_total'=>'integer',
            'visitors_now'=>'integer',
            'comments_count'=>'integer',
            'created_at'=>$this->dateTime().' DEFAULT NOW()',
            'isanalytical'=>'integer',
            'category'=>'string'

        ],'ENGINE=InnoDB','CHARACTER SET=utf8','COLLATE=utf8_general_ci');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
