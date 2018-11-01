<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Order') ?>

    <?= $form->field($model, 'ID_Perfumes') ?>

    <?= $form->field($model, 'Data') ?>

    <?= $form->field($model, 'Quantity') ?>

    <?= $form->field($model, 'Total_Money') ?>

    <?php // echo $form->field($model, 'ID_Users') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
