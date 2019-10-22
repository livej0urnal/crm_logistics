<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Salary;

/**
 * SalarySearch represents the model behind the search form of `app\models\Salary`.
 */
class SalarySearch extends Salary
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'worker_id', 'rate_id', 'prize_id', 'fine_id'], 'integer'],
            [['start_date', 'end_date', 'money', 'name'], 'safe'],
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
        $query = Salary::find();

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
            'id' => $this->id,
            'worker_id' => $this->worker_id,
            'rate_id' => $this->rate_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'prize_id' => $this->prize_id,
            'fine_id' => $this->fine_id,
        ]);

        $query->andFilterWhere(['like', 'money', $this->money])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
