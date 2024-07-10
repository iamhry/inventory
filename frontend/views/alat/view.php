<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Alat $model */

$this->title = $model->id_alat;
$this->params['breadcrumbs'][] = ['label' => 'Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="alat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_alat' => $model->id_alat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_alat' => $model->id_alat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_alat',
            'nama_alat',
            'no_seri',
            'type_alat',
            'spesifikasi_alat:ntext',
            'model_alat',
            'foto',
            'created',
            'createdBy',
            'modified',
            'modifiedBy',
        ],
    ]) ?>

</div>
