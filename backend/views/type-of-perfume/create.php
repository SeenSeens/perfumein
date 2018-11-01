<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TypeOfPerfume */

$this->title = 'Create Type Of Perfume';
$this->params['breadcrumbs'][] = ['label' => 'Type Of Perfumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-of-perfume-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
