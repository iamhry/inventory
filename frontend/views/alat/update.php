<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Alat $model */

$this->title = 'Update Alat: ' . $model->id_alat;
$this->params['breadcrumbs'][] = ['label' => 'Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_alat, 'url' => ['view', 'id_alat' => $model->id_alat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
