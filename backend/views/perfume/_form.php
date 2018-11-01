<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Perfume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Category')->textInput() ?>

    <?= $form->field($model, 'ID_Type_of_perfume')->textInput() ?>

    <?= $form->field($model, 'Perfume_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Price')->textInput() ?>

    <?= $form->field($model, 'Summary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Discounts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Image_Link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Views')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
