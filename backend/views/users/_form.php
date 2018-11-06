<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Người dùng</h3>
    </div>
    <div class="panel-body">
        <div class="users-form">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'Full_Name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'Phone_number')->textInput() ?>
            <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'Password')->passwordInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'Date_of_registration')->textInput(['maxlength' => true]) ?>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
