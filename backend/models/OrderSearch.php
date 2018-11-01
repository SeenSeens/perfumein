<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Order;

/**
 * OrderSearch represents the model behind the search form of `backend\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Order', 'ID_Perfumes', 'Quantity', 'ID_Users'], 'integer'],
            [['Data'], 'safe'],
            [['Total_Money'], 'number'],
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
        $query = Order::find();

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
            'ID_Order' => $this->ID_Order,
            'ID_Perfumes' => $this->ID_Perfumes,
            'Quantity' => $this->Quantity,
            'Total_Money' => $this->Total_Money,
            'ID_Users' => $this->ID_Users,
        ]);

        $query->andFilterWhere(['like', 'Data', $this->Data]);

        return $dataProvider;
    }
}
