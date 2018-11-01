<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Perfume */

$this->title = 'Update Perfume: ' . $model->ID_Perfume;
$this->params['breadcrumbs'][] = ['label' => 'Perfumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Perfume, 'url' => ['view', 'id' => $model->ID_Perfume]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perfume-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
