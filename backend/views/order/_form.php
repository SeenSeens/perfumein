<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Perfumes')->textInput() ?>

    <?= $form->field($model, 'Data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Quantity')->textInput() ?>

    <?= $form->field($model, 'Total_Money')->textInput() ?>

    <?= $form->field($model, 'ID_Users')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
