<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Teknisi */

$this->title = 'Tambah Data Teknisi';
$this->params['breadcrumbs'][] = ['label' => 'Teknisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teknisi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
