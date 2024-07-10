<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AlatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="alat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_alat') ?>

    <?= $form->field($model, 'nama_alat') ?>

    <?= $form->field($model, 'no_seri') ?>

    <?= $form->field($model, 'type_alat') ?>

    <?= $form->field($model, 'spesifikasi_alat') ?>

    <?php // echo $form->field($model, 'model_alat') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <?php // echo $form->field($model, 'modifiedBy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
