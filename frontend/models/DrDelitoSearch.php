<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PrecDrDelito;

/**
 * DrDelitoSearch represents the model behind the search form about `app\models\PrecDrDelito`.
 */
class DrDelitoSearch extends PrecDrDelito
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_delito'], 'integer'],
            [['tx_delito', 'icon_name', 'imagen'], 'safe'],
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
        $query = PrecDrDelito::find();

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
            'id_delito' => $this->id_delito,
        ]);

        $query->andFilterWhere(['like', 'tx_delito', $this->tx_delito])
            ->andFilterWhere(['like', 'icon_name', $this->icon_name])
            ->andFilterWhere(['like', 'imagen', $this->imagen]);

        return $dataProvider;
    }
}
