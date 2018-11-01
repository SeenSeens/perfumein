<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TypeOfPerfume */

$this->title = 'Update Type Of Perfume: ' . $model->ID_Type_of_perfume;
$this->params['breadcrumbs'][] = ['label' => 'Type Of Perfumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Type_of_perfume, 'url' => ['view', 'id' => $model->ID_Type_of_perfume]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-of-perfume-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
