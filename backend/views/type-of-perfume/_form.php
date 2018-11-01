<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TypeOfPerfume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-of-perfume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name_of_perfume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_Genre')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
