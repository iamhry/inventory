<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alat;

/**
 * AlatSearch represents the model behind the search form of `app\models\Alat`.
 */
class AlatSearch extends Alat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_alat', 'no_seri', 'createdBy', 'modifiedBy'], 'integer'],
            [['nama_alat', 'type_alat', 'spesifikasi_alat', 'model_alat', 'foto', 'created', 'modified'], 'safe'],
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
        $query = Alat::find();

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
            'id_alat' => $this->id_alat,
            'no_seri' => $this->no_seri,
            'created' => $this->created,
            'createdBy' => $this->createdBy,
            'modified' => $this->modified,
            'modifiedBy' => $this->modifiedBy,
        ]);

        $query->andFilterWhere(['like', 'nama_alat', $this->nama_alat])
            ->andFilterWhere(['like', 'type_alat', $this->type_alat])
            ->andFilterWhere(['like', 'spesifikasi_alat', $this->spesifikasi_alat])
            ->andFilterWhere(['like', 'model_alat', $this->model_alat])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
