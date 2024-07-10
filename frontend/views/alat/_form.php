<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Alat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="alat-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_seri')->textInput() ?>

    <?= $form->field($model, 'type_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spesifikasi_alat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'model_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>


    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'createdBy')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'modifiedBy')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
