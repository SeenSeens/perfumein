<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Users') ?>

    <?= $form->field($model, 'Full_Name') ?>

    <?= $form->field($model, 'Email') ?>

    <?= $form->field($model, 'Phone_number') ?>

    <?= $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Password') ?>

    <?php // echo $form->field($model, 'Date_of_registration') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
