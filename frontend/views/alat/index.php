<?php

use app\models\Alat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AlatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Alats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Alat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_alat',
            [
                'attribute' => 'foto',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img(Yii::getAlias('@web') . '/upload/' . $model->foto,
                        ['width' => '100px']);
                },
            ],
            'nama_alat',
            'no_seri',
            'type_alat',
            'spesifikasi_alat:ntext',
            //action pdf
            [
                'class' => ActionColumn::className(),
                'template' => '{pdf}',
                'buttons' => [
                    'pdf' => function ($url, $model) {
                        return Html::a('Cetak', ['pdf', 'id_alat' => $model->id_alat], [
                            'title' => Yii::t('app', 'pdf'),
                        ]);
                    }
                ]
            ],

            //'model_alat',
            //'foto',
            //'created',
            //'createdBy',
            //'modified',
            //'modifiedBy',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Alat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_alat' => $model->id_alat]);
                 }
            ],
        ],
    ]); ?>


</div>
