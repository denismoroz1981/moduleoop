<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\News;

/**
 * NewsSearch represents the model behind the search form of `common\models\News`.
 */
class NewsSearch extends News
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'visitors_total', 'visitors_now', 'comments_count', 'isanalytical'], 'integer'],
            [['name', 'text_head', 'text_main', 'photo', 'created_at', 'category_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = News::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize'=>5,
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'visitors_total' => $this->visitors_total,
            'visitors_now' => $this->visitors_now,
            'comments_count' => $this->comments_count,
            'created_at' => $this->created_at,
            'isanalytical' => $this->isanalytical,
            'category_id'=>$this->category_id
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'text_head', $this->text_head])
            ->andFilterWhere(['like', 'text_main', $this->text_main])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
