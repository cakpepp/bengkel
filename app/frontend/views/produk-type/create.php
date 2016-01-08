<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProdukType */

$this->title = 'Create Produk Type';
$this->params['breadcrumbs'][] = ['label' => 'Produk Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
