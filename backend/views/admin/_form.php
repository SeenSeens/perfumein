<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Người quản trị</h3>
    </div>
    <div class="panel-body">
        <div class="admin-form">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'Full_Name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'Password')->passwordInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'Role')->textInput(['maxlength' => true]) ?>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
