<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PerfumeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfume-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Perfume') ?>

    <?= $form->field($model, 'ID_Category') ?>

    <?= $form->field($model, 'ID_Type_of_perfume') ?>

    <?= $form->field($model, 'Perfume_Name') ?>

    <?= $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'Summary') ?>

    <?php // echo $form->field($model, 'Content') ?>

    <?php // echo $form->field($model, 'Discounts') ?>

    <?php // echo $form->field($model, 'Image') ?>

    <?php // echo $form->field($model, 'Views') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
