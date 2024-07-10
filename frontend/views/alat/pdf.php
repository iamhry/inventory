<?php
use yii\helpers\Html;
;?>
<p>Data alat</p>
<?= $model->nama_alat ?>
<?= $model->no_seri ?>
<?= Html::img(Yii::getAlias('@web') . '/upload/' . $model->foto,
    ['width' => '100px']); ?>

