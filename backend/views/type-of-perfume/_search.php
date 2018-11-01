<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TypeOfPerfumeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-of-perfume-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Type_of_perfume') ?>

    <?= $form->field($model, 'Name_of_perfume') ?>

    <?= $form->field($model, 'ID_Genre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
