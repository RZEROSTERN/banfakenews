<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Urgencies;

/**
 * UrgenciesSearch represents the model behind the search form about `app\models\Urgencies`.
 */
class UrgenciesSearch extends Urgencies
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['urgency_id', 'zone_id', 'last_updated', 'created_at', 'updated_at'], 'integer'],
            [['level', 'need_brigade', 'supplies_required', 'supplies_accept', 'supplies_not_required', 'address', 'detail_source'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Urgencies::find()->with('zone');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'urgency_id' => $this->urgency_id,
            'zone_id' => $this->zone_id,
            'last_updated' => $this->last_updated,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'level', $this->level])
            ->andFilterWhere(['like', 'need_brigade', $this->need_brigade])
            ->andFilterWhere(['like', 'supplies_required', $this->supplies_required])
            ->andFilterWhere(['like', 'supplies_accept', $this->supplies_accept])
            ->andFilterWhere(['like', 'supplies_not_required', $this->supplies_not_required])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'detail_source', $this->detail_source]);

        return $dataProvider;
    }
}
