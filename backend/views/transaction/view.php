<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Transaction */

$this->title = $model->ID_Transaction;
$this->params['breadcrumbs'][] = ['label' => 'Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_Transaction], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_Transaction], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_Transaction',
            'Status',
            'ID_Users',
            'Full_Name',
            'Email:email',
        ],
    ]) ?>

</div>
