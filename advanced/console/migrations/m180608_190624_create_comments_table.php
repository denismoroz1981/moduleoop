<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m180608_190624_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments',[
            "id"=>'pk',
            "news_id"=>"integer unique",
            "parent_id"=>"integer",
            "user"=>"string",
            "text"=>"string",
            "created_at"=>$this->dateTime().' DEFAULT NOW()',
            "update_time"=>$this->dateTime(),
            "isapproved"=>"integer",
            "plus"=>"integer"
        ],'ENGINE=InnoDB','CHARACTER SET=utf8','COLLATE=utf8_general_ci');

        $this->createIndex('idx-comments-news_id','comments','news_id');
        $this->addForeignKey('fk_comments_news_id','comments','news_id',
            'news','id','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_comments-news_id','comments');

        $this->dropIndex(
            'idx-comments-news_id',
            'comments'
        );

        $this->dropTable('comments');
    }
}
