<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Perfume;

/**
 * PerfumeSearch represents the model behind the search form of `backend\models\Perfume`.
 */
class PerfumeSearch extends Perfume
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Perfume', 'ID_Category', 'ID_Type_of_perfume', 'Views'], 'integer'],
            [['Perfume_Name', 'Summary', 'Content', 'Discounts', 'Image'], 'safe'],
            [['Price'], 'number'],
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
        $query = Perfume::find();

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
            'ID_Perfume' => $this->ID_Perfume,
            'ID_Category' => $this->ID_Category,
            'ID_Type_of_perfume' => $this->ID_Type_of_perfume,
            'Price' => $this->Price,
            'Views' => $this->Views,
        ]);

        $query->andFilterWhere(['like', 'Perfume_Name', $this->Perfume_Name])
            ->andFilterWhere(['like', 'Summary', $this->Summary])
            ->andFilterWhere(['like', 'Content', $this->Content])
            ->andFilterWhere(['like', 'Discounts', $this->Discounts])
            ->andFilterWhere(['like', 'Image', $this->Image]);

        return $dataProvider;
    }
}
