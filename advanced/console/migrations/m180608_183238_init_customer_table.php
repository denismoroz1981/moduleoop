<?php

use yii\db\Migration;

/**
 * Class m180608_183238_init_customer_table
 */
class m180608_183238_init_customer_table extends Migration
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
            'created_at'=>$this->dateTime().' DEFAULT NOW()',
            'isanalytical'=>'integer',
            'category'=>'string'

        ],'ENGINE=InnoDB','CHARACTER SET=utf8','COLLATE=utf8_general_ci');

        $this->createTable('tags',[
            'id'=> 'pk',
            'news_id'=>'integer unique',
            'name'=>'string'

        ],'ENGINE=InnoDB','CHARACTER SET=utf8','COLLATE=utf8_general_ci');

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

        $this->createTable('ads',[
            "id"=>'pk',
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
        //echo "m180608_183238_init_customer_table cannot be reverted.\n";

        //return false;
        $this->dropTable('news');
        $this->dropTable('comments');
        $this->dropTable('tags');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180608_183238_init_customer_table cannot be reverted.\n";

        return false;
    }
    */
}
