<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Transaction;

/**
 * TransactionSearch represents the model behind the search form of `backend\models\Transaction`.
 */
class TransactionSearch extends Transaction
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Transaction', 'ID_Users'], 'integer'],
            [['Status', 'Full_Name', 'Email'], 'safe'],
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
        $query = Transaction::find();

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
            'ID_Transaction' => $this->ID_Transaction,
            'ID_Users' => $this->ID_Users,
        ]);

        $query->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Full_Name', $this->Full_Name])
            ->andFilterWhere(['like', 'Email', $this->Email]);

        return $dataProvider;
    }
}
