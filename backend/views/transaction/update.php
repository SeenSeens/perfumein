<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Transaction */

$this->title = 'Update Transaction: ' . $model->ID_Transaction;
$this->params['breadcrumbs'][] = ['label' => 'Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Transaction, 'url' => ['view', 'id' => $model->ID_Transaction]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
