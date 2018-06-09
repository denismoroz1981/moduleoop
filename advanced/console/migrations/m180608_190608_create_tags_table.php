<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tags`.
 */
class m180608_190608_create_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tags',[
            'id'=> 'pk',
            'news_id'=>'integer unique',
            'name'=>'string'

        ],'ENGINE=InnoDB','CHARACTER SET=utf8','COLLATE=utf8_general_ci');

        $this->createIndex('idx-tags-news_id','tags','news_id');
        $this->addForeignKey('fk_news_news_id','tags','news_id',
            'news','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_tags-news_id','tags');

        $this->dropIndex(
            'idx-tags-news_id',
            'tags'
        );

        $this->dropTable('tags');
    }
}
