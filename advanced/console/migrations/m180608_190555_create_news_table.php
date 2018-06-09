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
            'category_id'=>'integer'

        ],'ENGINE=InnoDB','CHARACTER SET=utf8','COLLATE=utf8_general_ci');


        $this->createIndex('idx-news-category_id','news','category_id');
        $this->addForeignKey('fk_news_category_id','news','category_id',
            'category','id','CASCADE');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropForeignKey('fk_news-category_id','news');

        $this->dropIndex(
            'idx-news-category_id',
            'news'
        );
        $this->dropTable('news');
    }
}
