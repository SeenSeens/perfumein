<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Transaction */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Nước hoa</h3>
    </div>
    <div class="panel-body">
        <div class="transaction-form">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'ID_Users')->textInput() ?>
            <?= $form->field($model, 'Full_Name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
