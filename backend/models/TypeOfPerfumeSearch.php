<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TypeOfPerfume;

/**
 * TypeOfPerfumeSearch represents the model behind the search form of `backend\models\TypeOfPerfume`.
 */
class TypeOfPerfumeSearch extends TypeOfPerfume
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Type_of_perfume', 'ID_Category'], 'integer'],
            [['Name_of_perfume'], 'safe'],
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
        $query = TypeOfPerfume::find();

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
            'ID_Type_of_perfume' => $this->ID_Type_of_perfume,
            'ID_Category' => $this->ID_Category,
        ]);

        $query->andFilterWhere(['like', 'Name_of_perfume', $this->Name_of_perfume]);

        return $dataProvider;
    }
}
