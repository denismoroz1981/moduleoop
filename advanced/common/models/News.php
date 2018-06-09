<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string $text_head
 * @property string $text_main
 * @property string $photo
 * @property int $visitors_total
 * @property int $visitors_now
 * @property int $comments_count
 * @property string $created_at
 * @property int $isanalytical
 * @property int $category_id
 *
 * @property Comments $comments
 * @property Tags $tags
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visitors_total', 'visitors_now', 'comments_count', 'isanalytical','category_id'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'text_head', 'text_main', 'photo'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text_head' => 'Text Head',
            'text_main' => 'Text Main',
            'photo' => 'Photo',
            'visitors_total' => 'Visitors Total',
            'visitors_now' => 'Visitors Now',
            'comments_count' => 'Comments Count',
            'created_at' => 'Created At',
            'isanalytical' => 'Isanalytical',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasOne(Comments::className(), ['news_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasOne(Tags::className(), ['news_id' => 'id']);
    }
}
