<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Perfume */

$this->title = 'Create Perfume';
$this->params['breadcrumbs'][] = ['label' => 'Perfumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfume-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
