<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Admin;

/**
 * AdminSearch represents the model behind the search form of `backend\models\Admin`.
 */
class AdminSearch extends Admin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Admin'], 'integer'],
            [['Full_Name', 'Password', 'Role'], 'safe'],
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
        $query = Admin::find();

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
            'ID_Admin' => $this->ID_Admin,
        ]);

        $query->andFilterWhere(['like', 'Full_Name', $this->Full_Name])
            ->andFilterWhere(['like', 'Password', $this->Password])
            ->andFilterWhere(['like', 'Role', $this->Role]);

        return $dataProvider;
    }
}
