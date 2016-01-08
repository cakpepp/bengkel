<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\pegawai */

$this->title = 'Tambah Data Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
